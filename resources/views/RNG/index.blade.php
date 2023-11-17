<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radioactive 2023 | Receipt</title>
</head>

<body class="antialiased bg-black min-h-screen">

    <div class="w-full h-screen flex justify-center items-center align-center text-center flex-col relative">
        <h1 class="text-white font-taruno text-4xl">DOORPRIZE</h1>
        <div
            class="w-fit form-content shadow-md px-8 py-3 mb-10 font-pathway shadow-[#FFF000] text-white border-white border-2">
            <div class="w-full font-taruno text-md md:text-lg text-white text-center">Random Number Generator</div>
            <div>
                <div class="mb-1">
                    <label class="block form-label text-lg mb-0" for="">
                        MIN
                    </label>
                    <div>
                        <input
                            class="block shadow appearance-none border w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline bg-black text-white border-white border-3"
                            id="min" type="number" min="1" value="1">
                    </div>
                </div>
                <div class="mb-1">
                    <div>
                        <label class="block form-label text-lg mb-0" for="">MAX</label>
                    </div>
                    <div>
                        <input
                            class="block shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline bg-black text-white border-white border-3"
                            id="max" type="number">
                    </div>
                </div>
                <div class="w-full font-taruno text-md md:text-3xl text-white text-center my-4" id="output">0</div>
            </div>

            <div class="mt-4">
                <button id="generate"
                    class="button-submit text-center align-middle font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1 hover:bg-[#FFF000] hover:text-black border-2 border-white">
                    GENERATE
                </button>
            </div>
        </div>
        <div class="absolute h-full w-full flex justify-center align-middle items-center hidden" id="numberDiv">
            <div
                class="w-[800px] h-[400px] bg-black border-white text-white border-2 shadow-md px-8 py-48 z-40 flex justify-center flex-wrap align-middle text-center gap-12">
                <h1 class="text-[200px] text-center font-taruno" id="output2"></h1>
                <div class="w-full flex justify-center my-10">
                    <button
                        class="button-submit text-center align-middle font-taruno text-white bg-[#0E0EC0] border-2 border-white text-sm px-12 py-1 hover:bg-[#FFF000] hover:text-black w-fit"
                        onclick="hideNumberDiv()">OK</button></div>

            </div>
        </div>
    </div>
</body>
<script>
    var numberDiv = document.getElementById('numberDiv');

    function hideNumberDiv() {
        numberDiv.classList.add('hidden');
    }
    let generate = document.getElementById('generate');
    generate.addEventListener('click', () => {
        let min = document.getElementById('min').value;
        let max = document.getElementById('max').value;
        let random_num = Math.floor(Math.random() * (max - min) + +min);
        document.getElementById('output').innerHTML = `${random_num}`;
        document.getElementById('output2').innerHTML = `${random_num}`;

        numberDiv.classList.remove('hidden')
        // alert(`${random_num}`)
    })
</script>

</html>
