<div class="grid grid-cols-2 relative overflow-hidden border-y-4 border-x-8 border-azul rounded-[3rem] w-full min-h-[500px] group">
    <div class="absolute flex items-center justify-center" style="left: calc(50% - 40px);top: calc(50% - 40px);">
        <div class="relative flex items-center justify-center w-20 h-20 lds-ripple nextSlideBtn">

            <div class="absolute border-4 rounded-full border-azul " style="left: calc(50% - 40px);top: calc(50% - 40px);"></div>
            <div class="absolute border-4 rounded-full border-azul " style="left: calc(50% - 40px);top: calc(50% - 40px);"></div>

            <button class="absolute bg-white rounded-full shadow-lg fill-red-500 group-hover:fill-red-600 hover:fill-red-700">
                <svg width="48px" height="48px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="currentColor">
                    <path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm2.71,10.71-3,3a1,1,0,0,1-1.42,0,1,1,0,0,1,0-1.42L12.59,12l-2.3-2.29a1,1,0,0,1,1.42-1.42l3,3A1,1,0,0,1,14.71,12.71Z"></path>
                </svg>
            </button>
        </div>
    </div>

    <div class="bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset($img) }}')"></div>
    <div class="flex flex-col justify-center p-16">
        <h3 class="text-5xl font-bold text-azul">São Fransisco I</h3>
        <div class="text-xl">Fundamental I</div>
        <div class="text-xl">Telefone</div>
        <div class="text-xl">Endereço</div>
        <div class="flex gap-2 text-base">
            <button class="px-4 py-2 transition duration-300 border-red-900 text-indigo-50 bg-gradient-to-r from-red-500 via-red-600 to-red-500 hover:from-transparent hover:via-transparent hover:to-transparent hover:text-red-700 hover:border-red-700 rounded-xl border-x-4 border-y">
                Agendar uma visita
            </button>
            <button class="px-4 py-2 text-red-700 transition duration-300 border-red-900 hover:bg-gradient-to-r from-red-500 via-red-600 to-red-500 hover:border-red-900 hover:text-white rounded-xl border-x-4 border-y">
                Como chegar
            </button>
        </div>
    </div>
</div>
