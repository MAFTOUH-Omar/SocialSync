<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
    <link href="css/styles.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header class="color-1 shadow sticky top-0 z-50 w-full">
        <nav class="container px-8 mx-auto">
            <div class="flex justify-between item-center h-16  w-full">

                <div class="flex gap-6">
                    <img src="img/logo.svg" alt="logo" class="w-9">
                    <div class="flex items-center max-md:hidden">
                        <i class="fa-solid fa-magnifying-glass absolute py-1 px-4 font-color-3 text-base"></i>
                        <input class="w-80 py-2 px-8 ps-12 border-0 rounded-full color-2 shadow-sm outline-none focus:outline-none border-shadow text-sm" type="text" name="search" placeholder="réseau social" id="search">
                    </div>

                </div>
                <ul class="flex w-1/2 items-center justify-around max-md:w-full">
                    <li class="relative py-1"><a href="#" class="link-nav-bar link-active before:content[''] before:absolute before:w-10/12 before:h-0.5 before:bg-indigo-400 before:bottom-0 before:origin-left before:duration-300 before:ease-in-out before:hover:rotate-0 before:hover:w-full">Pour
                            vous</a></li>
                    <li class="relative py-1"><a href="#" class="link-nav-bar before:content[''] before:absolute before:w-10/12 before:h-0.5 before:bg-indigo-400 before:bottom-0 before:origin-left before:duration-300 before:ease-in-out before:hover:rotate-0 before:hover:w-full">Ami(e)s</a>
                    </li>
                </ul>
                <div class="flex items-center">
                    <div class="w-11 h-11 bg-slate-600 rounded-full bg-center bg-cover relative before:content-[''] before:absolute before:w-3 before:h-3 before:rounded-full before:bg-green-600 before:right-0 before:shadow-md before:border-[1.5px] before:border-[#e6f3fa] cursor-pointer hover:scale-110 ease-in-out duration-300 " style="background-image: url(img/man.jpg);">
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container px-8 mx-auto  grid grid-cols-[40%_1fr] grid-rows-[350px_1fr] gap-y-4 justify-items-center">
        <div class="bio col-span-2 w-full p-4 ">
            <div class="cover-photo w-full h-3/4 bg-white rounded-xl shadow p-2.5 relative overflow-hidden">
                <span class="flex w-full h-full rounded-lg overflow-hidden"><img src="img/cover.jpg" alt="" class="w-full"></span>
                <span class="absolute top-1/2 left-1/2 w-full h-full transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center bg-[#00375282] text-white cursor-pointer gap-3 font-semibold opacity-0 hover:opacity-100 ease-in-out duration-300 ">
                    <i class="fa-solid fa-camera fa-beat"></i> changer la photo</span>
            </div>
            <div class="photo-profile flex justify-around items-center h-1/4">
                <div class="">
                    <div class="text-2xl font-semibold"><span class="text-[#0088cc]">Hi,</span> AISSA GBIBAR</div>
                    <div class="text-xs text-center text-[#72727287]">Compte créé le
                        <span>21</span><span>/</span><span>06</span><span>/</span><span>2024</span>.
                    </div>
                </div>
                <div class="up w-1/4 flex justify-center items-center flex-col h-32 rounded-full relative bottom-10" id="photoProfile">
                    <div class="photo w-32 h-32 rounded-full overflow-hidden flex justify-center border-4 border-white shadow relative cursor-pointer before:content-['Cliquez'] before:flex before:items-center before:justify-center before:text-white before:text-xs before:font-semibold before:w-full before:h-full before:absolute before:bg-[#00375282] before:opacity-0 before:hover:opacity-80 before:ease-in-out before:duration-500">
                        <img src="img/man.jpg" alt="" class="h-56 max-w-96">
                    </div>

                    <div class="flex flex-col  divide-y divide-blue-200 absolute px-2 py-2 bg-white rounded-xl shadow top-24 invisible opacity-0 ease-in-out duration-500" id="changePhoto">
                        <div class="p-3 cursor-pointer hover:bg-[#00375242] ease-in-out duration-500"><i class="fa-regular fa-id-badge mr-2"></i> Voir la photo de profil</div>
                        <div class="p-3 cursor-pointer hover:bg-[#00375242] ease-in-out duration-500"><i class="fa-solid fa-images mr-2"></i> Choisir une photo de profil</div>
                        <div class="p-3 cursor-pointer hover:bg-[#00375242] ease-in-out duration-500"><i class="fa-regular fa-eye mr-2"></i> Voir Story</div>
                        <span class="absolute flex -top-3 left-[45%] bg-white w-5 h-7 rounded-tl-full -z-10"></span>
                    </div>

                </div>

                <div class="flex gap-1 justify-center items-center flex-col text-xs">
                    <span>1.1k ami(e)s</span>
                    <div class="friends flex relative justify-center left-5">
                        <div class="friend-1 circle-photo ">
                            <img src="img/man1.jpg" alt="" class="max-w-40 h-10">
                        </div>
                        <div class="friend-1 circle-photo right-2">
                            <img src="img/man2.jpg" alt="" class="max-w-40 h-10">
                        </div>
                        <div class="friend-1 circle-photo right-4">
                            <img src="img/man3.jpg" alt="" class="max-w-40 h-10">
                        </div>
                        <div class="friend-1 circle-photo right-6">
                            <img src="img/man4.jpg" alt="" class="max-w-40 h-10">
                        </div>
                        <div class="friend-1 circle-photo right-8">
                            <img src="img/woman1.jpg" alt="" class="max-w-40 h-10">
                        </div>
                        <div class="friend-1 circle-photo right-10">
                            <img src="img/woman2.jpg" alt="" class="max-w-40 h-10">
                        </div>

                        <div content-tooltip="Plus d'amis" class="friend-1 tooltip w-7 h-7 rounded-full  flex justify-center items-center bg-white shadow-lg cursor-pointer  relative right-12 hover:bg-[#e6f3fa] ease-in-out duration-300">
                            <i class="fa-solid fa-angles-right"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="posts col-span-1  ">
            <div class="sticky -top-[90%]  container-grid">

                <div class="info-user box-design divide-y">
                    <div class="title text-lg font-semibold">À propos de moi</div>
                    <div class="bio divide-y">
                        <div class="context-bio text-sm leading-relaxed mb-3 pt-3 ">Je m'appelle <span class="text-[#0088cc]">Aissa Gbibar</span>, 20 ans,<span class="text-[#0088cc]"> développeur full stack </span> étudiant la Data Science et les Systèmes de Sécurité de
                            l'Information.</div>
                        <div class="info-personal flex flex-col gap-3 pt-3">
                            <span><i class="fa-solid fa-house mr-3 "></i> <span>Habite à <span class="font-medium cursor-pointer hover:underline hover:decoration-1">Deroua</span> </span> </span>
                            <span><i class="fa-solid fa-phone mr-3 "></i> <span class="font-medium cursor-pointer hover:underline hover:decoration-1">+212 651081908</span> </span>
                            <span><i class="fa-solid fa-envelope mr-3"></i><span class="font-medium cursor-pointer hover:underline hover:decoration-1"> gbibaraissa@gmail.com</span> </span>
                            <span><i class="fa-solid fa-building-columns mr-3"></i><span class="font-medium cursor-pointer hover:underline hover:decoration-1"> Data Science & cyber security</span> </span>
                        </div>
                    </div>
                    <div class="button pt-3 w-full">
                        <button class="text-center p-3 w-full rounded-lg bg-[#4dacdb] text-[#e6f3fa] shadow-md hover:bg-[#0088cc] ease-in-out duration-300  hover:tracking-wide">Changer le contenu</button>
                    </div>
                </div>

                <div class="my-photo box-design">
                    <div class="title flex justify-between items-center">
                        <span class="text-lg font-semibold hover:underline hover:decoration-1 cursor-pointer">Photos</span>
                        <span class="text-sm font-color-3">49 Photos</span>
                    </div>

                    <div class="photos flex items-center flex-wrap gap-3 justify-center">
                        <div class="image design-box-photos group">
                            <img src="img/man1.jpg" alt="" class=" design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/man2.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/man3.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/man4.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/man.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/palestine.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/woman1.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/woman2.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group relative">
                            <img src="img/man5.jpg" alt="" class="design-photos">
                            <span class="flex w-full h-full bg-[#00375282] absolute z-10  justify-center items-center text-2xl text-white ">
                                <i class="fas fa-ellipsis-h"></i></span>
                        </div>
                    </div>

                </div>

                <div class="friends box-design">
                    <div class="title flex justify-between items-center">
                        <span class="text-lg font-semibold hover:underline hover:decoration-1 cursor-pointer">Ami(e)s</span>
                        <span class="text-sm font-color-3">1191 ami(e)s</span>
                    </div>

                    <div class="photos flex items-center flex-wrap gap-3 justify-center">
                        <div class="image design-box-photos group">
                            <img src="img/friends1.jpg" alt="" class=" design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/friends2.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/friends3.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/friends4.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/friends5.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/friends6.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/friends7.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group">
                            <img src="img/friends8.jpg" alt="" class="design-photos">
                        </div>
                        <div class="image design-box-photos group relative">
                            <img src="img/friends9.jpg" alt="" class="design-photos">
                            <span class="flex w-full h-full bg-[#00375282] absolute z-10  justify-center items-center text-2xl text-white ">
                                <i class="fas fa-ellipsis-h"></i></span>
                        </div>
                    </div>

                </div>

            </div>

        </div>




        <div class="category col-span-1  container-grid">

            <div class="box-create-post w-full rounded-lg bg-white px-4 pt-4 pb-2 shadow flex flex-col divide-y gap-y-4">
                <div class="grid grid-cols-[48px_1fr] gap-5">
                    <div class="photo-profile w-12 h-12 flex justify-center rounded-full overflow-hidden cursor-pointer">
                        <img src="img/man.jpg" alt="" class="max-w-80 h-24">
                    </div>
                    <div class="box-input-create-post flex  items-center h-12 w-full color-2 px-6 font-color-3 cursor-pointer rounded-full hover:bg-[#cce7f5] ease-in-out duration-300">
                        <span>Que voulez-vous dire ?</span>
                    </div>
                </div>

                <div class="icon pt-4 flex justify-evenly items-center">
                    <span class="flex gap-x-4 items-center w-1/2 justify-center py-2 cursor-pointer rounded-lg hover:bg-[#e6f3fa] font-medium"><i class="fa-regular fa-image"></i> Photo / texte </span>
                    <span class="flex gap-x-4 items-center w-1/2 justify-center py-2  cursor-pointer rounded-lg hover:bg-[#e6f3fa] font-medium"><i class="fa-solid fa-square-poll-vertical"></i> sondage </span>
                </div>

            </div>

            <div class="post px-4 pt-2 pb-4 flex flex-col gap-3 bg-white shadow rounded-lg ">

                <div class="info-post flex justify-between items-center">
                    <div class="photo-name flex gap-x-4">
                        <div class="photo-profile w-12 h-12 flex justify-center rounded-full overflow-hidden cursor-pointer">
                            <img src="img/man.jpg" alt="" class="max-w-80 h-24">
                        </div>
                        <div class="name-timing flex flex-col">
                            <span class="hover:underline hover:decoration-1"><a href="#">Aissa Gbibar</a></span>
                            <span class="">
                                <span class="time">2h</span>
                                <span class="type-post ml-1 tooltip cursor-pointer bottom-0" content-tooltip="public"><i class="fa-solid fa-earth-americas"></i></span>
                            </span>
                        </div>
                    </div>
                    <div class="three-point relative w-1/2 flex justify-end">
                        <div id="infoPost" class="icon cursor-pointer w-11 h-11 rounded-full flex justify-center items-center hover:bg-[#e6f3fa]">
                            <i class="fa-solid fa-ellipsis"></i>
                        </div>

                        <div id="settingPost" class="setting-post absolute flex flex-col divide-y p-3 bg-white shadow rounded-lg z-10 ease-out duration-500 no-active-info-post">
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-floppy-disk"></i>
                                <span>Enregistrer la publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-thumbtack"></i>
                                <span>Épingler la publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-trash-can"></i>
                                <span>Supprimer la publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fas fa-sync"></i> <span>Changer le type
                                    de post</span></div>
                            <span class="absolute flex -top-3 right-4 bg-white  w-5 h-3  rounded-tl-full -z-20"></span>
                        </div>

                    </div>
                </div>

                <div class="containte-post">
                    <div class="containte-text px-4 font-normal">
                        Performance exceptionnelle 🙌👍
                    </div>
                    <div class="containte-photo relative w-full min-h-64 max-h-96 bg-[#e6f3fa] mt-3 shadow overflow-hidden rounded-lg flex justify-center items-center">
                        <img src="img/man.jpg" alt="" class="max-h-96 shadow">

                        <div id="animationHeart" class="absolute w-full h-full backdrop-blur-sm flex justify-center items-center no-animation-heart">
                            <div id="heartIcons" class="heart-icons relative">
                                <span class=" big-heart text-red-600 text-9xl "><i class="fa-solid fa-heart"></i></span>
                                <span class="small-heart text-red-600 absolute -top-4 -right-3 -rotate-45"><i class="fa-regular fa-heart"></i></span>
                                <span class="small-heart text-red-600 absolute -top-4 -left-3 rotate-45"><i class="fa-regular fa-heart"></i></span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="Counting-interact flex flex-col divide-y divide-[#b3dbf0] px-3">

                    <div class="Counting py-2 flex items-center justify-between">
                        <div class="icon-heart flex items-center gap-2">
                            <i class="fa-solid fa-heart text-sm text-red-500 cursor-pointer hover:text-red-600"></i>
                            <a href="#" class="text-xs font-color-3 hover:underline hover:decoration-1 hover:text-[#003652]"><span>Saad
                                    El hiani</span> et <span>90</span> autres personnes ...</a>
                        </div>

                        <div class="icon-comment-sharing flex items-center gap-4">
                            <div class="comment text-xs group cursor-pointer">
                                <span class="mr-1 group-hover:underline group-hover:decoration-1">20</span>
                                <i class="fa-solid fa-comment group-hover:text-[#003652]"></i>
                            </div>
                            <div class="share text-xs group cursor-pointer">
                                <span class="mr-1 group-hover:underline group-hover:decoration-1">10</span>
                                <i class="fa-solid fa-share group-hover:text-[#003652]"></i>
                            </div>
                        </div>

                    </div>

                    <div class="interact pt-2 px-4 flex justify-between items-center">
                        <div id="heartInteract" class="heart-interact group cursor-pointer">
                            <i class="fa-solid fa-heart  cursor-pointer group-hover:text-red-600 ease-in-out duration-300"></i>
                            <span class="ml-1  group-hover:text-red-600 ease-in-out duration-300">J’adore</span>
                        </div>
                        <div class="comment group cursor-pointer">
                            <i class="fa-solid fa-comment group-hover:text-[#66b8e0] ease-in-out duration-300"></i>
                            <span class="ml-1 group-hover:text-[#66b8e0] ease-in-out duration-300">Commenter</span>
                        </div>
                        <div class="share group cursor-pointer">
                            <i class="fa-solid fa-share group-hover:text-[#66b8e0] ease-in-out duration-300"></i>
                            <span class="ml-1 group-hover:text-[#66b8e0] ease-in-out duration-300">Partager</span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="post px-4 pt-2 pb-4 flex flex-col gap-3 bg-white shadow rounded-lg ">

                <div class="info-post flex justify-between items-center">
                    <div class="photo-name flex gap-x-4">
                        <div class="photo-profile w-12 h-12 flex justify-center rounded-full overflow-hidden cursor-pointer">
                            <img src="img/man.jpg" alt="" class="max-w-80 h-24">
                        </div>
                        <div class="name-timing flex flex-col">
                            <span class="hover:underline hover:decoration-1"><a href="#">Aissa Gbibar</a></span>
                            <span class="">
                                <span class="time">1d</span>
                                <span class="type-post ml-1 tooltip cursor-pointer bottom-0" content-tooltip="public"><i class="fa-solid fa-earth-americas"></i></span>
                            </span>
                        </div>
                    </div>
                    <div class="three-point relative w-1/2 flex justify-end">
                        <div id="infoPost" class="icon cursor-pointer w-11 h-11 rounded-full flex justify-center items-center hover:bg-[#e6f3fa]">
                            <i class="fa-solid fa-ellipsis"></i>
                        </div>

                        <div id="settingPost" class="setting-post absolute flex flex-col divide-y p-3 bg-white shadow rounded-lg z-10 ease-out duration-500 no-active-info-post">
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-floppy-disk"></i>
                                <span>Enregistrer la
                                    publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-thumbtack"></i>
                                <span>Épingler la
                                    publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-trash-can"></i>
                                <span>Supprimer la
                                    publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fas fa-sync"></i> <span>Changer le type
                                    de
                                    post</span></div>
                            <span class="absolute flex -top-3 right-4 bg-white  w-5 h-3  rounded-tl-full -z-20"></span>
                        </div>

                    </div>
                </div>

                <div class="containte-post">
                    <div class="containte-text px-4 font-normal">
                        Quand on met la main à la pâte, il en reste toujours quelque chose aux doigts 👍
                    </div>
                </div>

                <div class="Counting-interact flex flex-col divide-y divide-[#b3dbf0] px-3">

                    <div class="Counting py-2 flex items-center justify-between">
                        <div class="icon-heart flex items-center gap-2">
                            <i class="fa-solid fa-heart text-sm text-red-500 cursor-pointer hover:text-red-600"></i>
                            <a href="#" class="text-xs font-color-3 hover:underline hover:decoration-1 hover:text-[#003652]"><span>Saad
                                    El
                                    hiani</span> et <span>200</span> autres personnes ...</a>
                        </div>

                        <div class="icon-comment-sharing flex items-center gap-4">
                            <div class="comment text-xs group cursor-pointer">
                                <span class="mr-1 group-hover:underline group-hover:decoration-1">40</span>
                                <i class="fa-solid fa-comment group-hover:text-[#003652]"></i>
                            </div>
                            <div class="share text-xs group cursor-pointer">
                                <span class="mr-1 group-hover:underline group-hover:decoration-1">10</span>
                                <i class="fa-solid fa-share group-hover:text-[#003652]"></i>
                            </div>
                        </div>

                    </div>

                    <div class="interact pt-2 px-4 flex justify-between items-center">
                        <div id="" class="heart-interact group cursor-pointer">
                            <i class="fa-solid fa-heart  cursor-pointer group-hover:text-red-600 ease-in-out duration-300"></i>
                            <span class="ml-1  group-hover:text-red-600 ease-in-out duration-300">J’adore</span>
                        </div>
                        <div class="comment group cursor-pointer">
                            <i class="fa-solid fa-comment group-hover:text-[#66b8e0] ease-in-out duration-300"></i>
                            <span class="ml-1 group-hover:text-[#66b8e0] ease-in-out duration-300">Commenter</span>
                        </div>
                        <div class="share group cursor-pointer">
                            <i class="fa-solid fa-share group-hover:text-[#66b8e0] ease-in-out duration-300"></i>
                            <span class="ml-1 group-hover:text-[#66b8e0] ease-in-out duration-300">Partager</span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="post px-4 pt-2 pb-4 flex flex-col gap-3 bg-white shadow rounded-lg ">

                <div class="info-post flex justify-between items-center">
                    <div class="photo-name flex gap-x-4">
                        <div class="photo-profile w-12 h-12 flex justify-center rounded-full overflow-hidden cursor-pointer">
                            <img src="img/man.jpg" alt="" class="max-w-80 h-24">
                        </div>
                        <div class="name-timing flex flex-col">
                            <span class="hover:underline hover:decoration-1"><a href="#">Aissa Gbibar</a></span>
                            <span class="">
                                <span class="time">6d</span>
                                <span class="type-post ml-1 tooltip cursor-pointer bottom-0" content-tooltip="public"><i class="fa-solid fa-earth-americas"></i></span>
                            </span>
                        </div>
                    </div>
                    <div class="three-point relative w-1/2 flex justify-end">
                        <div id="infoPost" class="icon cursor-pointer w-11 h-11 rounded-full flex justify-center items-center hover:bg-[#e6f3fa]">
                            <i class="fa-solid fa-ellipsis"></i>
                        </div>

                        <div id="settingPost" class="setting-post absolute flex flex-col divide-y p-3 bg-white shadow rounded-lg z-10 ease-out duration-500 no-active-info-post">
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-floppy-disk"></i>
                                <span>Enregistrer la publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-thumbtack"></i>
                                <span>Épingler la publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-trash-can"></i>
                                <span>Supprimer la publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fas fa-sync"></i> <span>Changer le type
                                    de post</span></div>
                            <span class="absolute flex -top-3 right-4 bg-white  w-5 h-3  rounded-tl-full -z-20"></span>
                        </div>

                    </div>
                </div>

                <div class="containte-post">
                    <div class="containte-text px-4 font-normal">
                        On ne fait pas d'omelettes sans casser d'oeufs ❤
                    </div>
                    <div class="containte-photo relative w-full min-h-64 max-h-96 bg-[#e6f3fa] mt-3 shadow overflow-hidden rounded-lg flex justify-center items-center">
                        <img src="img/man4.jpg" alt="" class="max-h-96 shadow">

                        <div id="animationHeart" class="absolute w-full h-full backdrop-blur-sm flex justify-center items-center no-animation-heart">
                            <div id="heartIcons" class="heart-icons relative">
                                <span class=" big-heart text-red-600 text-9xl "><i class="fa-solid fa-heart"></i></span>
                                <span class="small-heart text-red-600 absolute -top-4 -right-3 -rotate-45"><i class="fa-regular fa-heart"></i></span>
                                <span class="small-heart text-red-600 absolute -top-4 -left-3 rotate-45"><i class="fa-regular fa-heart"></i></span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="Counting-interact flex flex-col divide-y divide-[#b3dbf0] px-3">

                    <div class="Counting py-2 flex items-center justify-between">
                        <div class="icon-heart flex items-center gap-2">
                            <i class="fa-solid fa-heart text-sm text-red-500 cursor-pointer hover:text-red-600"></i>
                            <a href="#" class="text-xs font-color-3 hover:underline hover:decoration-1 hover:text-[#003652]"><span>Saad
                                    El hiani</span> et <span>300</span> autres personnes ...</a>
                        </div>

                        <div class="icon-comment-sharing flex items-center gap-4">
                            <div class="comment text-xs group cursor-pointer">
                                <span class="mr-1 group-hover:underline group-hover:decoration-1">50</span>
                                <i class="fa-solid fa-comment group-hover:text-[#003652]"></i>
                            </div>
                            <div class="share text-xs group cursor-pointer">
                                <span class="mr-1 group-hover:underline group-hover:decoration-1">30</span>
                                <i class="fa-solid fa-share group-hover:text-[#003652]"></i>
                            </div>
                        </div>

                    </div>

                    <div class="interact pt-2 px-4 flex justify-between items-center">
                        <div id="heartInteract" class="heart-interact group cursor-pointer">
                            <i class="fa-solid fa-heart  cursor-pointer group-hover:text-red-600 ease-in-out duration-300"></i>
                            <span class="ml-1  group-hover:text-red-600 ease-in-out duration-300">J’adore</span>
                        </div>
                        <div class="comment group cursor-pointer">
                            <i class="fa-solid fa-comment group-hover:text-[#66b8e0] ease-in-out duration-300"></i>
                            <span class="ml-1 group-hover:text-[#66b8e0] ease-in-out duration-300">Commenter</span>
                        </div>
                        <div class="share group cursor-pointer">
                            <i class="fa-solid fa-share group-hover:text-[#66b8e0] ease-in-out duration-300"></i>
                            <span class="ml-1 group-hover:text-[#66b8e0] ease-in-out duration-300">Partager</span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="post px-4 pt-2 pb-4 flex flex-col gap-3 bg-white shadow rounded-lg ">

                <div class="info-post flex justify-between items-center">
                    <div class="photo-name flex gap-x-4">
                        <div class="photo-profile w-12 h-12 flex justify-center rounded-full overflow-hidden cursor-pointer">
                            <img src="img/man.jpg" alt="" class="max-w-80 h-24">
                        </div>
                        <div class="name-timing flex flex-col">
                            <span class="hover:underline hover:decoration-1"><a href="#">Aissa Gbibar</a></span>
                            <span class="">
                                <span class="time">2w</span>
                                <span class="type-post ml-1 tooltip cursor-pointer bottom-0" content-tooltip="public"><i class="fa-solid fa-earth-americas"></i></span>
                            </span>
                        </div>
                    </div>
                    <div class="three-point relative w-1/2 flex justify-end">
                        <div id="infoPost" class="icon cursor-pointer w-11 h-11 rounded-full flex justify-center items-center hover:bg-[#e6f3fa]">
                            <i class="fa-solid fa-ellipsis"></i>
                        </div>

                        <div id="settingPost" class="setting-post absolute flex flex-col divide-y p-3 bg-white shadow rounded-lg z-10 ease-out duration-500 no-active-info-post">
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-floppy-disk"></i>
                                <span>Enregistrer la publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-thumbtack"></i>
                                <span>Épingler la publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fa-solid fa-trash-can"></i>
                                <span>Supprimer la publication</span>
                            </div>
                            <div class="info-post hover:bg-[#e6f3fa]"><i class="fas fa-sync"></i> <span>Changer le type
                                    de post</span></div>
                            <span class="absolute flex -top-3 right-4 bg-white  w-5 h-3  rounded-tl-full -z-20"></span>
                        </div>

                    </div>
                </div>

                <div class="containte-post">
                    <div class="containte-text px-4 font-normal">
                        Free palestine 🍉🍉🍉🍉
                    </div>
                    <div class="containte-photo relative w-full min-h-64 max-h-96 bg-[#e6f3fa] mt-3 shadow overflow-hidden rounded-lg flex justify-center items-center">
                        <img src="img/palestine.jpg" alt="" class="max-h-96 shadow">

                        <div id="animationHeart" class="absolute w-full h-full backdrop-blur-sm flex justify-center items-center no-animation-heart">
                            <div id="heartIcons" class="heart-icons relative">
                                <span class=" big-heart text-red-600 text-9xl "><i class="fa-solid fa-heart"></i></span>
                                <span class="small-heart text-red-600 absolute -top-4 -right-3 -rotate-45"><i class="fa-regular fa-heart"></i></span>
                                <span class="small-heart text-red-600 absolute -top-4 -left-3 rotate-45"><i class="fa-regular fa-heart"></i></span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="Counting-interact flex flex-col divide-y divide-[#b3dbf0] px-3">

                    <div class="Counting py-2 flex items-center justify-between">
                        <div class="icon-heart flex items-center gap-2">
                            <i class="fa-solid fa-heart text-sm text-red-500 cursor-pointer hover:text-red-600"></i>
                            <a href="#" class="text-xs font-color-3 hover:underline hover:decoration-1 hover:text-[#003652]"><span>Saad
                                    El hiani</span> et <span>100</span> autres personnes ...</a>
                        </div>

                        <div class="icon-comment-sharing flex items-center gap-4">
                            <div class="comment text-xs group cursor-pointer">
                                <span class="mr-1 group-hover:underline group-hover:decoration-1">20</span>
                                <i class="fa-solid fa-comment group-hover:text-[#003652]"></i>
                            </div>
                            <div class="share text-xs group cursor-pointer">
                                <span class="mr-1 group-hover:underline group-hover:decoration-1">10</span>
                                <i class="fa-solid fa-share group-hover:text-[#003652]"></i>
                            </div>
                        </div>

                    </div>

                    <div class="interact pt-2 px-4 flex justify-between items-center">
                        <div id="heartInteract" class="heart-interact group cursor-pointer">
                            <i class="fa-solid fa-heart  cursor-pointer group-hover:text-red-600 ease-in-out duration-300"></i>
                            <span class="ml-1  group-hover:text-red-600 ease-in-out duration-300">J’adore</span>
                        </div>
                        <div class="comment group cursor-pointer">
                            <i class="fa-solid fa-comment group-hover:text-[#66b8e0] ease-in-out duration-300"></i>
                            <span class="ml-1 group-hover:text-[#66b8e0] ease-in-out duration-300">Commenter</span>
                        </div>
                        <div class="share group cursor-pointer">
                            <i class="fa-solid fa-share group-hover:text-[#66b8e0] ease-in-out duration-300"></i>
                            <span class="ml-1 group-hover:text-[#66b8e0] ease-in-out duration-300">Partager</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <script src="js/app.js"></script>

</body>

</html>