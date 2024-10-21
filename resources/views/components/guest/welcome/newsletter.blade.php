@push('footer')
    <script>
        const enviar = document.getElementById('enviar');
        const resposta = document.getElementById('resposta');

        var name = document.querySelector('input[name=name]').value;
        var whatsapp = document.querySelector('input[name=whatsapp]').value;
        var email = document.querySelector('input[name=email]').value;
        var segmento = document.querySelector('select[name=segmento]').value;

        const addLoading = () => {
            enviar.innerHTML =
                '<svg class="w-10 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"><rect x="17.5" y="30" width="10" height="20" fill="#fff"  stroke-width="2" stroke="#fff" class="opacity-50"><animate attributeName="y" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="18;30;30" keySplines="0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.2s"></animate><animate attributeName="height" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="64;40;40" keySplines="0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.2s"></animate></rect><rect x="42.5" y="30" width="10" height="20" fill="#fff"  stroke-width="2" stroke="#fff" class="opacity-75"><animate attributeName="y" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="20.999999999999996;30;30" keySplines="0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.1s"></animate><animate attributeName="height" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="58.00000000000001;40;40" keySplines="0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.1s"></animate></rect><rect x="67.5" y="30" width="10" height="20" fill="#fff"  stroke-width="2" stroke="#fff" class="opacity-100"><animate attributeName="y" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="20.999999999999996;30;30" keySplines="0 0.5 0.5 1;0 0.5 0.5 1"></animate><animate attributeName="height" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="58.00000000000001;40;40" keySplines="0 0.5 0.5 1;0 0.5 0.5 1"></animate></rect></svg>'
            resposta.innerHTML = 'Enviando';
        }

        const removeLoading = () => {
            enviar.innerHTML = 'Eu quero';
            resposta.innerHTML = 'Cadastro realizado com sucesso!';

            document.querySelector('input[name=name]').value = null;
            document.querySelector('input[name=whatsapp]').value = null;
            document.querySelector('input[name=email]').value = null;
            document.querySelector('select[name=segmento]').value = '';
        }

        const handleSubmit = (event) => {
            event.preventDefault();
            addLoading()

            fetch('https://api.sheetmonkey.io/form/cSCAwDwZL67W25QLf25MP9', {
                method: 'post',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    name: document.querySelector('input[name=name]').value,
                    whatsapp: document.querySelector('input[name=whatsapp]').value,
                    email: document.querySelector('input[name=email]').value,
                    segmento: document.querySelector('select[name=segmento]').value
                })
            }).then(() => removeLoading());
        }

        document.querySelector('form').addEventListener('submit', handleSubmit);

        var whatsapp = document.getElementById('whatsapp');
        whatsapp.addEventListener("input", () => {

            var onlyNumber = whatsapp.value.replace(/\D/g, "").substring(0, 11);
            var formatNumber = "";
            var numberArray = onlyNumber.split("");

            // (12) 34567-8901
            if (numberArray.length > 0) {
                formatNumber += `(${numberArray.slice(0,2).join("")})`;
            }

            if (numberArray.length > 2) {
                formatNumber += ` ${numberArray.slice(2,7).join("")}`;
            }

            if (numberArray.length > 7) {
                formatNumber += `-${numberArray.slice(7,11).join("")}`;
            }

            whatsapp.value = formatNumber;
        })
    </script>
@endpush
<div class="relative py-32 overflow-hidden bg-azul h-96 2xl:rounded-lg">
    <x-guest.container>

        <x-guest.key-logo class="absolute hidden rotate-90 w-60 -top-52 left-56 text-white/10 lg:block" />
        <x-guest.application-logo-mono class="absolute -bottom-10 -right-20 w-[500px] text-white/10" />

        <div class="absolute top-0 left-0 grid items-center w-full h-full px-2 md:gap-4 lg:gap-10 lg:grid-cols-2">
            <div
                class="lg:text-[3.5rem] sm:text-3xl text-2xl md:text-4xl lg:leading-[3.5rem] leading-10 font-bold text-white lg:pl-28 tracking-wide text-center lg:text-left">
                Excelência suíça aliada aos princípios e valores cristãos.</div>
            <form class="flex flex-col items-center justify-center gap-2">
                <input class=" py-2 text-center rounded-lg w-72 bg-white/90" required type="text" placeholder="Nome"
                    name="name" id="name" />
                <input class=" py-2 text-center rounded-lg w-72 bg-white/90" required type="tel"
                    placeholder="WhatsApp" name="whatsapp" id="whatsapp" />
                <input class=" py-2 text-center rounded-lg w-72 bg-white/90" required type="email"
                    placeholder="E-mail" name="email" id="email" />
                <select class=" py-2 text-center rounded-lg w-72 select_arrow_none" name="segmento" id="Segmento"
                    required>
                    <option value="" hidden>Selecione</option>
                    <option value="Berçário/ Ed. Infantil">Berçário/ Ed. Infantil</option>
                    <option value="Ens. Fundamental I">Ens. Fundamental I</option>
                    <option value="Ens. Fundamental II">Ens. Fundamental II</option>
                    <option value="Ens. Médio">Ens. Médio</option>
                </select>
                <button type="submit" class="px-4 py-2 mt-2 font-bold text-white bg-red-700 rounded" id="enviar">Eu
                    quero</button>
                <div id="resposta" class="text-center text-white"></div>
            </form>
        </div>

    </x-guest.container>

</div>
