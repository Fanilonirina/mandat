@extends('layouts.app')

@section('content')
<div class="mx-2">
    <!-- breadCrumb -->
    <ol class="breadcrumb v1">
        <li class="breadcrumb-level font-semibold"><a href="">Accueil</a></li>
        <li class="breadcrumb-level font-semibold"><a href="">Liste de mandat</a></li>
        <li class="breadcrumb-level font-semibold"><a href="">Detaille du mandat</a></li>
    </ol>

    <!-- Mandat details -->
    <div class="w-full bg-white rounded-md shadow p-2 flex flex-wrap text-sm mt-4 mb-2">
        <div class="w-full m-2">
            <!-- Tabs -->
            <ul id="tabs" class="inline-flex w-full border-b mb-0 pl-0">
                <li class="bg-white tab-selector-btn -mb-px"><a id="default-tab" href="#tab_1">Mandat</a></li>
                <li class="bg-gray-100 tab-selector-btn"><a href="#tab_2">Biens</a></li>
                <li class="bg-gray-100 tab-selector-btn"><a href="#tab_3">Recu</a></li>
                <li class="bg-gray-100 tab-selector-btn"><a href="#tab_4">Document</a></li>
                <li class="bg-gray-100 tab-selector-btn"><a href="#tab_5">Droit de suite</a></li>
            </ul>

            <!-- Tab Contents -->
            <div id="tab-contents" class="rounded-b  border-l border-r border-b">
                <div id="tab_1" class="p-4">
                    <div class="">
                        <p class="tab-title">Mandat N° XX-XXX</p>
                        <div class="flex flex-wrap border bg-white overflow-hidden">
                            <div class="w-full py-2 pl-4 bg-gray-100 border-b">
                                Recherche rapide
                            </div>
                            <div class="w-full p-4">
                                <form action="" class="w-full flex">
                                    <div class="w-3/4 flex items-center justify-around">
                                        <div class="w-3/5 flex justify-end items-center">
                                            <label for="pseudo" class="mr-4 w-24">Nom du client:</label>
                                            <div class="w-2/3 h-8 select ml-2">
                                                <select class="border">
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w-2/5 flex justify-center items-center">
                                            <label for="order" class="mr-4"> N° d'ordre:</label>
                                            <div class="w-1/2 h-8 select ml-2">
                                                <select class="border">
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="px-4 py-2 bg-red-300 hover:bg-red-400 duration-300 text-white font-semibold rounded">Rechercher</button>
                                </form>
                            </div>
                        </div>
                        <div class="px-8 py-2 border border-1.5 bg-blue-100 text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum doloribus adipisci earum! Aperiam cum praesentium veritatis error dolor. Praesentium nostrum harum pariatur dolore ratione obcaecati modi aliquid sed deleniti est!
                        </div>
                    </div>
                    <table name="mandat-first-table" class="my-4 text-sm table-auto">
                        <tbody>
                            <tr class="w-full">
                                <td class="text-right">
                                    Honoraires hors taxes soumis a la TVA (TVA 20%): <span class="text-red-500">*</span>
                                </td>
                                <td class="w-20">
                                    <div class="w-full border h-8"></div>
                                </td>
                                <td class="text-left">% soit %TTC</td>
                                <td class="text-right pl-4">
                                    Frais annexes (transport, deplacement, assurances): <span class="text-red-500">*</span>
                                </td>
                                <td class="w-20">
                                    <div class="w-full border h-8"></div>
                                </td>
                                <td class="text-left">
                                    &euro;
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td class="text-right">
                                    Honoraires d'expert:
                                </td>
                                <td>
                                    <div class="w-full border h-8"></div>
                                </td>
                                <td class="text-left">
                                    &euro;
                                </td>
                                <td class="text-right">
                                    Participation aux frais de publicite: <span class="text-red-500">*</span>
                                </td>
                                <td>
                                <div class="w-full border h-8"></div>
                                </td>
                                <td>
                                    &euro;
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td colspan="6" class="text-red-500 text-left">* Champs obligatoires</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="tab_2" class="hidden px-4 pt-4 pb-2">
                    <div class="">
                        <p class="tab-title">Liste des biens du mandat N° XX-XXX</p>
                        <div class="px-8 py-2 border border-1.5 bg-blue-50 text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum doloribus adipisci earum! Aperiam cum praesentium veritatis error dolor. Praesentium nostrum harum pariatur dolore ratione obcaecati modi aliquid sed deleniti est!
                        </div>
                        <button class="w-1/5 font-semibold flex justify-center items-center px-4 py-1 bg-amber-400 hover:bg-amber-500 duration-300 text-white my-2">Ajouter un bien <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path style="fill:white;" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                            </svg></button>
                        <table name="mandat-second-table" class="w-full mt-2 text-xs border-collapse border border-slate-400">
                            <thead>
                                <tr class="bg-amber-50">
                                    <th scope="col" class="px-4">Bien N°</th>
                                    <th scope="col" class="w-2/5">Designation</th>
                                    <th scope="col" class="px-4">Prix de reserve</th>
                                    <th scope="col" class="px-4">Recu</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" class="w-1/5">Commentaire</th>
                                </tr>
                            </thead>
                            <tbody class="py-4">
                                <tr class="w-full">
                                    <td class="px-2">
                                        <div class="w-full border text-center h-8 flex items-center justify-center">
                                            XXX/XXX
                                        </div>
                                    </td>
                                    <td class="px-2">
                                        <div class="w-full flex">
                                            <div class="w-5/6 border pl-2 h-8 flex items-center">
                                                Lorem ipsum dolor sit, amet
                                            </div>
                                            <div class="w-1/6 h-8 select ml-2">
                                                <select class="border">
                                                    <option>O</option>
                                                    <option>V</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-2">
                                        <div class="w-full border text-center h-8 flex items-center justify-center">
                                            XXX.XX
                                        </div>
                                    </td>
                                    <td><input class="mx-auto" type="checkbox" value="value1"></td>
                                    <td class="px-2">
                                        <div class="w-full border p-1 text-center h-8 flex items-center justify-center">
                                            JJ/MM/AAAA
                                        </div>
                                    </td>

                                    <td rowspan="4" class="px-2">
                                        <div class="w-full border text-justify p-2 h-full">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, voluptatem reprehenderit excepturi labore quo, tempore placeat nemo earum provident, ut doloribus necessitatibus dolore nihil iste impedit incidunt animi maxime pariatur.
                                        </div>
                                    </td>
                                </tr>
                                <tr class="w-full">
                                    <td class="px-2">
                                        <div class="w-full border text-center h-8 flex items-center justify-center">
                                            XXX/XXX
                                        </div>
                                    </td>
                                    <td class="px-2">
                                        <div class="w-full flex">
                                            <div class="w-5/6 border pl-2 h-8 flex items-center">
                                                Lorem ipsum dolor sit, amet
                                            </div>
                                            <div class="w-1/6 h-8 select ml-2">
                                                <select class="border">
                                                    <option>O</option>
                                                    <option>V</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-2">
                                        <div class="w-full border text-center h-8 flex items-center justify-center">
                                            XXX.XX
                                        </div>
                                    </td>
                                    <td><input class="mx-auto" type="checkbox" value=""></td>
                                    <td class="px-2">
                                        <div class="w-full border p-1 text-center h-8 flex items-center justify-center">
                                            JJ/MM/AAAA
                                        </div>
                                    </td>
                                </tr>
                                <tr class="w-full">
                                    <td class="px-2">
                                        <div class="w-full border text-center h-8 flex items-center justify-center">
                                            XXX/XXX
                                        </div>
                                    </td>
                                    <td class="px-2">
                                        <div class="w-full flex">
                                            <div class="w-5/6 border pl-2 h-8 flex items-center">
                                                Lorem ipsum dolor sit, amet
                                            </div>
                                            <div class="w-1/6 h-8 select ml-2">
                                                <select class="border">
                                                    <option>O</option>
                                                    <option>V</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-2">
                                        <div class="w-full border text-center h-8 flex items-center justify-center">
                                            XXX.XX
                                        </div>
                                    </td>
                                    <td><input class="mx-auto" type="checkbox" value="value1"></td>
                                    <td class="px-2">
                                        <div class="w-full border p-1 text-center h-8 flex items-center justify-center">
                                            JJ/MM/AAAA
                                        </div>
                                    </td>
                                </tr>
                                <tr class="w-full">
                                    <td class="px-2">
                                        <div class="w-full border text-center h-8 flex items-center justify-center">
                                            XXX/XXX
                                        </div>
                                    </td>
                                    <td class="px-2">
                                        <div class="w-full flex">
                                            <div class="w-5/6 border pl-2 h-8 flex items-center">
                                                Lorem ipsum dolor sit, amet
                                            </div>
                                            <div class="w-1/6 h-8 select ml-2">
                                                <select class="border">
                                                    <option>O</option>
                                                    <option>V</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-2">
                                        <div class="w-full border text-center h-8 flex items-center justify-center">
                                            XXX.XX
                                        </div>
                                    </td>
                                    <td><input class="mx-auto" type="checkbox" value="value1"></td>
                                    <td class="px-2">
                                        <div class="w-full border p-1 text-center h-8 flex items-center justify-center">
                                            JJ/MM/AAAA
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                        <button class="w-1/5 flex justify-center font-semibold items-center px-4 py-1 bg-amber-400 hover:bg-amber-500 duration-300 text-white my-2">Ajouter un bien <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path style="fill:white;" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                            </svg></button>
                    </div>
                </div>
                <div id="tab_3" class="hidden p-4">
                    tab_3
                </div>
                <div id="tab_4" class="hidden p-4">
                    tab_4
                </div>
                <div id="tab_5" class="hidden p-4">
                    tab_5
                </div>
            </div>

            <div class="w-full flex justify-end">
                <button class="w-1/5 font-semibold px-4 py-1 bg-green-400 hover:bg-green-500 duration-300 text-white my-2">Enregistrer</button>
            </div>

        </div>
    </div>
</div>
@endsection

@push('child-scripts')
<script>
    let tabsContainer = document.querySelector("#tabs");

    let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

    tabTogglers.forEach(function(toggler) {
        toggler.addEventListener("click", function(e) {
            e.preventDefault();

            let tabName = this.getAttribute("href");

            let tabContents = document.querySelector("#tab-contents");

            for (let i = 0; i < tabContents.children.length; i++) {

                tabTogglers[i].parentElement.classList.remove("-mb-px", "bg-white");
                tabTogglers[i].parentElement.classList.add("bg-gray-100");
                tabContents.children[i].classList.remove("hidden");
                if ("#" + tabContents.children[i].id === tabName) {
                    continue;
                }
                tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("-mb-px", "bg-white");
        });
    });
</script>
@endpush