<?php

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\File;

function deletePublicDirectory($relativePath)
{
    // Define o caminho completo usando public_path()
    $path = public_path($relativePath);

    // Verifica se o diretório existe
    if (!File::exists($path)) {
        return "O diretório não existe.";
    }

    // Função recursiva para apagar diretório e seu conteúdo
    $files = File::allFiles($path);  // Obtém todos os arquivos

    // Deleta todos os arquivos no diretório
    foreach ($files as $file) {
        File::delete($file->getPathname());
    }

    // Remove todos os subdiretórios (caso haja)
    $directories = File::directories($path);
    foreach ($directories as $directory) {
        deletePublicDirectory(str_replace(public_path(), '', $directory)); // Chama a função recursivamente
    }

    // Após apagar todos os arquivos e subdiretórios, remove o diretório em si
    File::deleteDirectory($path);

    return "Diretório excluído com sucesso.";
}

/**
 * Exclui uma imagem e remove diretórios vazios recursivamente.
 *
 * @param string $imagePath Caminho da imagem no disco 'public'
 * @return void
 */
function deleteImgEmptyDir($imagePath)
{
    // Verifica se o caminho da imagem foi informado e existe
    if ($imagePath && Storage::disk('public')->exists($imagePath)) {
        // Exclui a imagem
        Storage::disk('public')->delete($imagePath);

        // Obtém o diretório da imagem
        $directoryPath = dirname($imagePath);

        // Chama a função para remover diretórios vazios recursivamente
        deleteEmptyDirectories($directoryPath);
    }
}

/**
 * Remove diretórios vazios recursivamente.
 *
 * @param string $directoryPath Caminho do diretório
 * @return void
 */
function deleteEmptyDirectories($directoryPath)
{
    // Verifica se o diretório está vazio (sem arquivos e subdiretórios)
    if (Storage::disk('public')->allFiles($directoryPath) === [] && Storage::disk('public')->allDirectories($directoryPath) === []) {
        // Exclui o diretório se estiver vazio
        Storage::disk('public')->deleteDirectory($directoryPath);

        // Pega o diretório pai e tenta remover recursivamente
        $parentDirectory = dirname($directoryPath);

        // Verifica se o diretório pai não é a raiz
        if ($parentDirectory != '.' && $parentDirectory != '/') {
            deleteEmptyDirectories($parentDirectory);
        }
    }
}

/**
 * Upload de imagens no sistema
 *
 * @param object $img Imagem que será armazenada como .webp
 * @param string $pathname Local do armazenamento da imagem
 * @param array  $dimensions Dimensões da imagem gerada
 * @return void
 */
function makeImgWEBP($img, $pathname, $dimensions = null) {
    if ($img !== null) {
        $image = Image::read($img->getRealPath());

        if ($dimensions == []) {
            $encoded = $image->toWebp(60);
        }else{
            $encoded = $image->cover($dimensions[0], $dimensions[1])->toWebp(60);
        }

        Storage::disk('public')->put($pathname, (string) $encoded);
    }
}

if (!function_exists('getFirstAndLastName')) {
    function getFirstAndLastName($fullName) : string
    {
        // Divide o nome em partes
        $nameParts = explode(' ', $fullName);

        // Se houver apenas um nome, retorna-o
        if (count($nameParts) == 1) {
            return $fullName;
        }

        // Obtém o primeiro nome
        $firstName = $nameParts[0];

        // Detecta preposições e obtém o último nome
        $prepositions = ['da', 'de', 'do', 'das', 'dos', 'e']; // Pode adicionar mais preposições se necessário
        $lastName = $nameParts[count($nameParts) - 1];

        // Verifica se a penúltima parte do nome é uma preposição
        if (in_array(strtolower($nameParts[count($nameParts) - 2]), $prepositions)) {
            $lastName = $nameParts[count($nameParts) - 2] . ' ' . $lastName;
        }

        // Retorna o primeiro e o último nome
        return $firstName . ' ' . $lastName;
    }
}

/**
 * Função para extrair a palavra seguinte a 'admin' na URL.
 *
 * @return string|null
 */
function getModule()
{
    $path = request()->path(); // Ex: 'admin/web/slide'
    $segments = explode('/', $path); // Transforma em array ['admin', 'web', 'slide']

    // Verifica se 'admin' está presente e retorna o próximo segmento
    $adminIndex = array_search('admin', $segments);
    if ($adminIndex !== false && isset($segments[$adminIndex + 1])) {
        return $segments[$adminIndex + 1];
    }

    return null; // Se não houver segmento após 'admin'
}
