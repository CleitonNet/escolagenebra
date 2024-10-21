<div class="relative py-32 overflow-hidden bg-azul h-96 2xl:rounded-lg">
    <x-guest.container>
        <x-guest.key-logo class="absolute hidden rotate-90 w-60 -top-52 left-56 text-white/10 lg:block" />
        <x-guest.application-logo-mono class="absolute -bottom-10 -right-20 w-[500px] text-white/10" />

        <div class="absolute top-0 left-0 grid items-center w-full h-full px-2 md:gap-4 lg:gap-10 lg:grid-cols-2">
            <div
                class="lg:text-[3.5rem] sm:text-3xl text-2xl md:text-4xl lg:leading-[3.5rem] leading-10 font-bold text-white lg:pl-28 tracking-wide text-center lg:text-left">
                Excelência suíça aliada aos princípios e valores cristãos.
            </div>

            <form wire:submit.prevent="submit" class="flex flex-col items-center justify-center gap-2">
                <input wire:model.defer="name" class="py-2 text-center rounded-lg w-72 bg-white/90" required type="text"
                    placeholder="Nome" />
                <input wire:model.defer="whatsapp" class="py-2 text-center rounded-lg w-72 bg-white/90" required
                    type="tel" placeholder="WhatsApp" />
                <input wire:model.defer="email" class="py-2 text-center rounded-lg w-72 bg-white/90" required
                    type="email" placeholder="E-mail" />
                <select wire:model.defer="segmento" class="py-2 text-center rounded-lg w-72" required>
                    <option value="" hidden>Selecione</option>
                    <option value="Berçário/ Ed. Infantil">Berçário/ Ed. Infantil</option>
                    <option value="Ens. Fundamental I">Ens. Fundamental I</option>
                    <option value="Ens. Fundamental II">Ens. Fundamental II</option>
                    <option value="Ens. Médio">Ens. Médio</option>
                </select>

                <button type="submit" class="px-4 py-2 mt-2 font-bold text-white bg-red-700 rounded" id="enviar">
                    Eu quero
                </button>
                <x-action-message on="registered" time='7000'>
                    <div class="text-center text-white bg-green-700 py-1.5 px-2.5 rounded">Cadastro realizado com sucesso! <br> <strong>Em breve entraremos em contato.</strong></div>
                </x-action-message>
            </form>

        </div>
    </x-guest.container>
</div>
