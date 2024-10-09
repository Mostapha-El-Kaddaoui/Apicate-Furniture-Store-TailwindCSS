<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('localhost','root','','furn');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT * FROM furnpdt';
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
$furns = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.cdnfonts.com/css/xenogears" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <title>Tailwind</title>
  </head>
<body>
<div class="w-full h-p bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1606744824163-985d376605aa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80')]">
    <div class="w-full h-full bg-mobg"></div>
    <div class="absolute top-0 w-full">
        <div class="w-11/12 flex mx-auto py-9">
            <div class="w-1/4 flex">
                <img src="logo.png" class="w-6 h-6 my-px">
                <h1 class="text-2xl font-disco font-bold text-white ml-1">KU FURN</h1>
            </div>
            <div class="w-2/4 mt-1">
            <ul class="flex text-white font-disco font-semibold justify-center space-x-4">
                <li class="cursor-pointer border-b border-white">HOME</li>
                <li class="cursor-pointer hover:border-b hover:border-white">ABOUT</li>
                <li class="flex cursor-pointer hover:border-b hover:border-white">SHOP<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 m-px">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg></li>
                <li class="cursor-pointer hover:border-b hover:border-white">CONTACT</li>
            </ul>
            </div>
            <div class="w-1/4 flex justify-end text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <span class="bg-white pl-1 pt-0 pb-3 pr-2 -ml-2 rounded-full w-4 h-4 p-1 text-xs text-neutral-800">0</span>
                

            </div>
        </div>
    </div>
    <div class="absolute w-full top-48 text-center">
    <h3 class="text-9xl text-white font-Amster">New Collection</h3>
    </div>
    <div class="absolute w-full top-122 ">
        <div class="w-11/12 mx-auto">
            <div class="text-white">
               <h3 class="text-7xl font-disco font-bold">Of Tables And Chairs</h3>
               <p class="text-2xl font-bold font-secret ml-3 mt-2 ">Le Lorem Ipsum est simplement du faux texte employe dans la composition </p>
            </div>
            <!--
                <div class="">
                <div class="flex justify-start">
                <button class="text-white border border-white p-4 mt-5 ml-2 hover:bg-white hover:text-black transition ease-out duration-500">CHEK NEW</button>
                </div>
            </div>
            -->

        </div>
    </div>
</div>
<!-- about place -->
<div class="w-full">
    <div class="w-11/12 mx-auto mt-24 grid grid-cols-2 gap-12">
        <div class="w-full h-130">
            <div class="w-full h-2/5">
                <h3 class="text-4xl ml-1 font-disco font-bold text-black">About Us</h3>
                <p class="text-lg font-disco mt-4 text-gray-500">We are a furniture retailer, offering a wide range of furniture items for the living room, bedroom, dining room, and office. Our products include sofas, loveseats, sectionals, recliners, dining tables, chairs, desks, and more.</p>
                <p class="text-black text-lg mt-4 font-disco font-semibold ml-1 underline"><a href="#">More</a></p>
            </div>
            <div class="w-full h-3/5 mt-9">
                <div class="w-full shadow-lg rounded-sm overflow-hidden h-4/5 bg-cover bg-center  bg-[url('https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')]">
                <div class="w-full h-full bg-obg"></div>
                </div>
                <div class="w-full h-1/5 flex justify-between">
                    <div class="mt-2 -ml-1">
                        <h5 class="text-black text-xl font-bold font-disco">DESKTOP</h3>
                        <p class="text-gray-500 text-lg font-bold font-disco">359.49$</p>
                    </div>
                    <div>
                        <div class="mt-2">
                           <p class="text-black text-md font-disco font-bold underline"><a href="#">More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-128">
            <div class="w-full shadow-lg h-5/6 overflow-hidden rounded-sm cursor-pointer bg-cover bg-center  bg-[url('https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80')] ">
                <div class="w-full h-full bg-obg"></div>
            </div>
            <div class="w-full h-1/6 flex justify-between">
                    <div class="mt-2 -ml-1">
                        <h5 class="text-black text-xl font-bold font-disco">DESKTOP</h3>
                        <p class="text-gray-500 text-lg font-bold font-disco">359.49$</p>
                    </div>
                    <div>
                        <div class="mt-2">
                           <p class="text-black text-md font-disco font-bold underline"><a href="#">More</a></p>
                        </div>
                    </div>
             </div>
        </div>
    </div>
</div>
 
<!--tending-->


<div class="w-full">
    <div class="w-11/12 text-center my-12 mx-auto">
            <h2 class="text-black text-4xl font-disco font-bold">Tending</h2>
            <p class="w-1/2 mx-auto text-gray-400 text-xl font-disco font-semibold">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise</p>
    </div>
    <div class="w-11/12 grid grid-cols-3 gap-x-4 mx-auto mt-5">
        <div class="relative shadow-xl cursor-pointer h-96 bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')]">
            <div class="w-full h-full bg-obg"></div>
            <div class="realtive top-0">
                <div class="absolute top-0 w-full text-white p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 float-right">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
                <div class="absolute bottom-0 ml-5 mb-6">
                <h5 class="text-white text-2xl font-bold font-disco">CHAISE IN OUR</h5>
                <p class="text-white font-disco font-semibold ml-1">Utilities for controlling the placement</p>
                </div>
            </div>
        </div>
        <div class="relative shadow-xl cursor-pointer h-96 bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1589584649628-b597067e07a3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')]">
        <div class="w-full h-full bg-obg"></div>
        <div class="realtive top-0">
                <div class="absolute top-0 w-full text-white p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 float-right">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
            <div class="absolute bottom-0 ml-5 mb-6">
            <h5 class="text-white text-2xl font-bold font-disco">CHAISE IN OUR</h5>
            <p class="text-white font-disco font-semibold ml-1">Utilities for controlling the placement</p>
            </div>
        </div>
        </div>
        <div class="relative shadow-xl cursor-pointer h-96 bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')]">
            <div class="w-full h-full bg-obg"></div>
            <div class="realtive top-0">
                <div class="absolute top-0 w-full text-white p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 float-right">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
                <div class="absolute bottom-0 ml-5 mb-6">
                <h5 class="text-white text-2xl font-bold font-disco">CHAISE IN OUR</h5>
                <p class="text-white font-disco font-semibold ml-1">Utilities for controlling the placement</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--more-->

<div class=" w-full mt-20 h-124 bg-cover bg-center  bg-[url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=958&q=80')] ">
        <div class="w-full h-full bg-mobg">
           <div class="m-0 pt-28 pr-5 w-full text-center">
              <h5 class="text-white text-5xl font-bold font-secret">CHAISE IN</h5>
              <p class="text-white text-2xl font-disco font-bold mt-3">We are a furniture retailer, offering a wide range<br>of furniture items for the living room<br>bedroom, dining room</p>
              <button class="text-white text-lg border border-white p-2 mt-5 hover:bg-white hover:text-black transition ease-out duration-500">CHEK NEW</button>
           </div>
        </div>
</div>

<!--products-->

<div class="w-full">
    <div class="w-11/12 text-center my-12 mx-auto">
            <h2 class="text-black text-4xl font-disco font-bold">Our Products</h2>
            <p class="text-gray-400 text-xl font-disco font-semibold">Utilities for controlling the placement</p>
    </div>
    <div class="w-11/12 grid gap-x-8 gap-y-8 grid-cols-4 mx-auto">
    <?php foreach ($furns as $furn) { ?>
        <div class="h-124">
            <div style="background-image:url('<?php echo htmlspecialchars($furn['imgurl']);?>');" class="h-4/5 w-full rounded-sm overflow-hidden bg-cover bg-center cursor-pointer">
                <div class="w-full h-full bg-obg">
                    <h3 class="text-white"></h3>
                </div>
            </div>
            <div class="h-1/5 w-full ">
                <div class="mt-3">
                    <h5 class="text-black text-xl font-bold font-disco"><?php echo htmlspecialchars($furn['name']);?></h5>
                    <p class="text-gray-500 -ml-px text-sm font-disco font-bold mt-1"><?php echo htmlspecialchars($furn['price']);?>$<span class="p-1 bg-neutral-800 text-white text-xs font-disco font-bold ml-2">-<?php echo htmlspecialchars($furn['redu']);?>%</span></p>
                    <div class="w-full mt-2 ml-px flex">
                        <div style="background-color:<?php echo htmlspecialchars($furn['col1']);?>;" class="w-5 h-5 z-40 rounded-full"></div>
                        <div style="background-color:<?php echo htmlspecialchars($furn['col2']);?>;" class="w-5 h-5 z-30 rounded-full -ml-1"></div>
                        <div style="background-color:<?php echo htmlspecialchars($furn['col3']);?>;" class="w-5 h-5 z-20 rounded-full -ml-1"></div>
                        <div style="background-color:<?php echo htmlspecialchars($furn['col4']);?>;" class="w-5 h-5 z-10 rounded-full -ml-1"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="w-full text-center mt-10">
    <button class="text-black mt-3 border border-black p-3">View More</button>
    </div>
</div>
<div class="w-11/12 mx-auto grid grid-cols-2 gap-x-5">
    <div class=""></div>

</div>
<!--other-->
<div class="w-11/12 mx-auto mt-20 grid grid-cols-2 gap-x-5">
    <div>
        <div class="relative cursor-pointer rounded-sm overflow-hidden h-124 bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1550226891-ef816aed4a98?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')]">
            <div class="relative w-full h-full bg-obg">
               <div class="absolute bottom-0 ml-5 mb-6">
                <h5 class="text-white text-4xl font-bold font-disco">Black Chaise</h5>
                <p class="text-white text-xl font-disco font-semibold m-1">Utilities for controlling the placement</p>
                <p class="text-white font-disco font-semibold ml-1 underline"><a href="#">More</a></p>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h5 class="text-black text-4xl font-bold font-disco -ml-1">Black Chaise</h5>
            <p class="text-gray-400 text-xl font-disco font-semibold">Utilities for controlling the placement</p>
        </div>
    </div>
    <div>
    <div class="mb-5">
            <h5 class="text-black text-4xl font-bold font-disco -ml-1">Black Chaise</h5>
            <p class="text-gray-400 text-xl font-disco font-semibold">Utilities for controlling the placement</p>
        </div>
        <div class="relative cursor-pointer rounded-sm overflow-hidden h-124 bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1567016526105-22da7c13161a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80')]">
            <div class="relative w-full h-full bg-obg">
            <div class="absolute bottom-0 ml-5 mb-6">
                <h5 class="text-white text-4xl font-bold font-disco">White Table</h5>
                <p class="text-white text-xl font-disco font-semibold m-1">Utilities for controlling the placement</p>
                <p class="text-white font-disco font-semibold ml-1 underline"><a href="#">More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full mt-28">
    <div class="w-full bg-gray-100 mx-auto p-24">
        <div class="flex justify-between">
            <img src="obj1.png" class="w-44 ">
            <img src="obj2.png" class="w-44 ">
            <img src="obj4.png" class="w-44 ">
            <img src="obj3.png" class="w-44 ">
            <img src="obj5.png" class="w-44 ">
        </div>
    </div>
</div>
<div class="w-full">
    <div class="w-11/12 mx-auto grid grid-cols-2 gap-2 mt-10">
        <div class="h-128 grid grid-rows-2 gap-2">
            <div class="bg-neutral-900 rounded-md cursor-pointer">
                <div class="text-center mt-14 w-full">
                    <h3 class="text-white text-2xl">NEW COLLECTION OF THEM<br>CONTROLE THEY</h3>
                    <button class="text-white mt-3 border border-white p-4 hover:bg-white hover:text-black transition ease-out duration-500">CHEK NEW</button>
                </div>
            </div>
            <div class="overflow-hidden rounded-md cursor-pointer bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1653971858526-97f2ba1914c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80')]">
            <div class="w-full h-full bg-obg"></div>
            </div>
        </div>
        <div class="overflow-hidden h-128 rounded-md cursor-pointer bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1540574163026-643ea20ade25?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')]">
        <div class="w-full h-full bg-obg"></div>
        </div>
    </div>
</div>



<!--footer-->
<div class="w-full mt-16">
<div class="w-11/12 text-center mx-auto">
            <h2 class="text-black text-4xl font-disco font-bold">Category</h2>
            <p class="text-gray-400 text-xl font-disco font-semibold">Utilities for controlling the placement</p>
    </div>
    <div class="w-11/12 h-128 mx-auto grid grid-cols-2 gap-x-2 mt-10">
        <div class="w-full">
            <div class="h-1/3 w-full overflow-hidden rounded-sm cursor-pointer bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1565058650109-849d383455ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80')]">
                <div class="relative w-full h-full bg-obg">
                    <div class="absolute bottom-0 ml-5 mb-6">
                        <h5 class="text-white text-3xl font-bold font-disco">White Table</h5>
                        <p class="text-white text-xl font-disco font-semibold m-1">Utilities for controlling the placement</p>
                        <p class="text-white font-disco font-semibold ml-1 underline"><a href="#">More</a></p>
                    </div>
                </div>
            </div>
            <div class="relative h-2/3 mt-2 w-full overflow-hidden rounded-sm cursor-pointer bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1550581190-9c1c48d21d6c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1109&q=80')]">
            <div class="relative w-full h-full bg-obg">
                <div class="absolute bottom-0 ml-5 mb-6">
                  <h5 class="text-white text-3xl font-bold font-disco">White Table</h5>
                  <p class="text-white text-xl font-disco font-semibold m-1">Utilities for controlling the placement</p>
                  <p class="text-white font-disco font-semibold ml-1 underline"><a href="#">More</a></p>
                </div>
            </div>
            </div>
        </div>
        <div class="w-full">
            <div class="h-1/2 w-full overflow-hidden rounded-sm cursor-pointer bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1634643836960-c345b3c3e998?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80')]">
            <div class="relative w-full h-full bg-obg">
                   <div class="absolute bottom-0 ml-5 mb-6">
                        <h5 class="text-white text-3xl font-bold font-disco">White Table</h5>
                        <p class="text-white text-xl font-disco font-semibold m-1">Utilities for controlling the placement</p>
                        <p class="text-white font-disco font-semibold ml-1 underline"><a href="#">More</a></p>
                    </div>
            </div>
            </div>
            <div class="h-1/2 mt-2 w-full overflow-hidden rounded-sm cursor-pointer bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1517991104123-1d56a6e81ed9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')]">
            <div class="relative w-full h-full bg-obg">
                   <div class="absolute bottom-0 ml-5 mb-6">
                        <h5 class="text-white text-3xl font-bold font-disco">White Table</h5>
                        <p class="text-white text-xl font-disco font-semibold m-1">Utilities for controlling the placement</p>
                        <p class="text-white font-disco font-semibold ml-1 underline"><a href="#">More</a></p>
                   </div>
            </div>
            </div>
        </div>

    </div>
</div>
<div class="w-full bg-gray-100">
    <div class="w-3/4 mx-auto mt-20 pt-20 pb-24 pr-14 pl-10 text-center">
        <h5 class="text-black text-bold text-4xl font-bold font-secret">Join Us</h5>
        <p class="text-gray-500 text-xl font-disco font-semibold mt-4">By registering on our website, you will have access to exclusive deals and discounts, personalized product recommendations, Plus, you'll be able to get updates on our new products and promotions, register now!</p>
        <div class="w-128 flex mx-auto mt-7">
            <input class="w-124 bg-transparent placeholder:text-neutral-700 font-bold outline-0 text-lg font-disco py-2 border-b border-black" type="text" name="" id="" placeholder="Your Email">
            <button class="ml-2 text-black font-bold text-lg font-disco border-b border-black mt-4">
                Register
            </button>
        </div>
    </div>
</div>
<div class="w-full h-96 bg-neutral-800">
    <div class="h-4/5 w-full mx-auto">
      <div class=" mx-auto w-11/12 grid grid-cols-5 gap-x-8 pt-20">
       <div class="w-full col-span-2">
            <h4 class="text-white text-3xl font-bold font-secret">SHOESHOP</h4>
            <p class="text-white text-md font-light mt-4">By registering on our website, you will have access<br> to exclusive deals and discounts</p>
            <div class="flex justify-between mt-6 w-52">
               <svg class="cursor-pointer h-8 w-8 text-neutral-800 bg-white rounded-full p-1"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
               <svg class="cursor-pointer h-8 w-8 text-neutral-800 bg-white rounded-full p-1"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="16" height="16" rx="4" />  <circle cx="12" cy="12" r="3" />  <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" /></svg>
               <svg class="cursor-pointer h-8 w-8 text-neutral-800 bg-white rounded-full p-1"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 19c-4.286 1.35-4.286-2.55-6-3m12 5v-3.5c0-1 .099-1.405-.5-2 2.791-.3 5.5-1.366 5.5-6.04a4.567 4.567 0 0 0 -1.333 -3.21 4.192 4.192 0 00-.08-3.227s-1.05-.3-3.476 1.267a12.334 12.334 0 0 0 -6.222 0C6.462 2.723 5.413 3.023 5.413 3.023a4.192 4.192 0 0 0 -.08 3.227A4.566 4.566 0 004 9.486c0 4.64 2.709 5.68 5.5 6.014-.591.589-.56 1.183-.5 2V21" /></svg>
               <svg class="cursor-pointer h-8 w-8 text-neutral-800 bg-white rounded-full p-1"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M22 4.01c-1 .49-1.98.689-3 .99-1.121-1.265-2.783-1.335-4.38-.737S11.977 6.323 12 8v1c-3.245.083-6.135-1.395-8-4 0 0-4.182 7.433 4 11-1.872 1.247-3.739 2.088-6 2 3.308 1.803 6.913 2.423 10.034 1.517 3.58-1.04 6.522-3.723 7.651-7.742a13.84 13.84 0 0 0 .497 -3.753C20.18 7.773 21.692 5.25 22 4.009z" /></svg>
               <svg class="cursor-pointer h-8 w-8 text-neutral-800 bg-white rounded-full p-1"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="9" />  <path d="M9 3.6c5 6 7 10.5 7.5 16.2" />  <path d="M6.4 19c3.5-3.5 6-6.5 14.5-6.4" />  <path d="M3.1 10.75c5 0 9.814-.38 15.314-5" /></svg>

            </div>
        </div>
        <div class="w-full flex-col justify-center">
            <h4 class="text-white text-2xl font-bold font-secret">Pages</h4>
            <div class="mt-5">
               <p class="text-white text-md font-light">Home Page</p>
               <p class="text-white text-md font-light">About Page</p>
               <p class="text-white text-md font-light">Shop Page</p>
               <p class="text-white text-md font-light">Help Page</p>
            </div>
        </div>
        <div class="w-full">
            <h4 class="text-white text-2xl font-bold font-secret">Questions</h4>
            <div class="mt-5">
               <p class="text-white text-md font-light">Where can I find your catalog?</p>
               <p class="text-white text-md font-light">Can I make online purchases?</p>
               <p class="text-white text-md font-light">When can I visit your studio?</p>
               <p class="text-white text-md font-light">How long does shipping take?</p>
            </div>
        </div>
        <div class="w-full">
            <h4 class="text-white text-2xl font-bold font-secret">contact us</h4>
            <div class="mt-5">
               <p class="text-white text-md font-light">example@gmail.com</p>
               <p class="text-white text-md font-light">+212 600 000000</p>
               <p class="text-white text-md font-light">809, OUJDA ,MOROCCO</p>
            </div>
        </div>
      </div>
    </div>
    <div class="h-1/5 w-11/12 mx-auto border-t border-white">
        <div class="w-full text-center">
            <p class="text-white text-md mt-7 font-secret font-bold pr-5 ">© 2020 KU FURN, All Rights Reserved</p>
        </div>
    </div>
</div>
</body>
<style>
.h-p{
    height:580px;
}.g-b{
    width:100%;
    height:100%;
    background-color:#2828285e;
}

</style>
</html>