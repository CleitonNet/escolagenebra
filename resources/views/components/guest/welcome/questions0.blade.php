<div class="mb-28">

    <style>
        .container {
            max-width: 1280px;
            margin: 50px auto;
            padding: 0 10px;
        }

        .accordion {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 25px;
            overflow: hidden;
            display: grid;
            gap: 2px;
        }

        .accordion-header {
            padding: 15px;
            cursor: pointer;
            user-select: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .accordion-header:first-child {
            border-radius: 25px 25px 0 0;
        }

        .accordion-content {
            padding: 0 15px;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transform: translateY(-20px); /* Adiciona a animação de deslizamento */
            transition: max-height 0.3s ease, opacity 0.3s ease, padding 0.3s ease, transform 0.3s ease;
        }

        .accordion-content.active {
            max-height: 500px; /* Define uma altura suficiente para o conteúdo expandido */
            opacity: 1;
            padding: 15px;
            transform: translateY(0); /* Move o conteúdo para a posição inicial */
        }
    </style>


    <div class="grid w-full px-4 mx-auto mb-10 sm:px-6 2xl:px-8 max-w-8xl">
        <h2 class="pb-10 text-5xl font-bold text-center xl:text-6xl">Perguntas frequentes</h2>
    </div>

    <div class="container">
        <div class="accordion">
            <div class="border text-azul bg-azul/10 hover:bg-azul/20 border-azul/50 accordion-header"
                onclick="toggleAccordion(1)">
                <h2>Por que a Genebra não tem “cultinho/ capela”?</h2>
                <span id="arrow1">&#9660;</span>
            </div>
            <div class="accordion-content" id="accordionContent1">
                <p>Porque toda nossa rotina já é em culto ao Senhor. Momentos litúrgicos devem se dar dentro da
                    denominação escolhida pelos pais, pois o papel primário de educar a criança é da Família.</p>
            </div>

            <div class="border text-azul bg-azul/10 hover:bg-azul/20 border-azul/50 accordion-header"
                onclick="toggleAccordion(2)">
                <h2>Por que não tem “Aula de Religião”?</h2>
                <span id="arrow2">&#9660;</span>
            </div>
            <div class="accordion-content" id="accordionContent2">
                <p>Entendemos que a formação religiosa é papel da família com sua respectiva igreja, por isso não
                    reduzimos nossa fé a um tempo semanal. Destacamos que utilizamos uma material didático confessional,
                    logo, as aulas trazem o texto bíblico para o contexto do conteúdo de sala com fim de mostrar um Deus
                    que está em tudo.</p>
            </div>

            <div class="border text-azul bg-azul/10 hover:bg-azul/20 border-azul/50 accordion-header"
                onclick="toggleAccordion(3)">
                <h2>Como funciona o Bible Time?</h2>
                <span id="arrow3">&#9660;</span>
            </div>
            <div class="accordion-content" id="accordionContent3">
                <p>Diariamente temos um breve período devocional para reforçar o hábito e apontar os benefícios da
                    leitura bíblica diária. Utilizamos o texto sagrado para destacar princípios, valores e virtudes
                    cristãs. Quem conduz esse momento é o próprio professor do aluno que faz não apenas a leitura
                    bíblica, mas traz aplicações práticas adequadas ao cotidiano de sala de aula.</p>
            </div>

            <div class="border text-azul bg-azul/10 hover:bg-azul/20 border-azul/50 accordion-header"
                onclick="toggleAccordion(4)">
                <h2>Meu filho pode não participar das “atividades religiosas”?</h2>
                <span id="arrow4">&#9660;</span>
            </div>
            <div class="accordion-content" id="accordionContent4">
                <p>Em nossa escola não separamos “atividades religiosas” das “atividades seculares”, pois entendemos que
                    a vida cristã é integral, logo, tudo deve ser vivido CORAM DEO, diante de Deus. Famílias de todas as
                    religiões são bem vindas em nosso ambiente e serão acolhidas em todas as nossas atividades sem
                    acepção. Caso a família não concorde com os princípios e valores cristãos que são parte integrante
                    do Projeto Político Pedagógico da escola, recomendamos que busque uma outra instituição de ensino.
                </p>
            </div>

            <div class="border text-azul bg-azul/10 hover:bg-azul/20 border-azul/50 accordion-header"
                onclick="toggleAccordion(5)">
                <h2>Qual o papel do Capelão na escola?</h2>
                <span id="arrow5">&#9660;</span>
            </div>
            <div class="accordion-content" id="accordionContent5">
                <p>O Capelão-Mor é o defensor da confessionalidade da Escola. Ele junto com os demais capelãos
                    supervisionam os eventos, promovem treinamentos sobre a cosmovisão cristã na educação e fazem
                    aconselhamento periódicos com os colaboradores. Além disso, o capelão tem um papel muito importante
                    de manter o vínculo com as famílias, realizando visitas nos lares, em hospitais e também conduzindo
                    o Comitê de Ética da escola para situações conflituosas entre os alunos.</p>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(questionNumber) {
            for (let i = 1; i <= 5; i++) {
                if (i !== questionNumber) {
                    document.getElementById("accordionContent" + i).classList.remove("active");
                    document.getElementById("arrow" + i).innerHTML = "&#9660;";
                }
            }

            var content = document.getElementById("accordionContent" + questionNumber);
            var arrow = document.getElementById("arrow" + questionNumber);

            if (content.classList.contains("active")) {
                content.classList.remove("active");
                arrow.innerHTML = "&#9660;";
            } else {
                content.classList.add("active");
                arrow.innerHTML = "&#9650;";
            }
        }
    </script>

</div>
