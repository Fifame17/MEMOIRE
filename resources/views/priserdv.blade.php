<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-slate-200 text-center flex justify-center items-center ">
           <img src="{{asset('images/LOGOBIOSSO-removebg-preview 1.png')}}">
           <div class="ml-4">POLYCLINIQUE BIOSCO</div>
    </div>
    
              <div class="bg-white m-10">
                <div class="bg-slate-200 p-8 ml-20">
              <div class="font-bold text-center m-8">Prise de rendez-vous</div>
    <div class="bg-white w-50 h-50">
<div class="mb-4 max-w-xs justify-center">
           <label for="nom et prenom"class="block text-sm font-bold mb-4 m-4 ">Nom et prénoms*</label>
        <input type="nom et prenom" id="nom et prenom"name="nom et prenom"placeholder="entrez le nom et le prenom"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:ouline-none focus:shadow-outline bg-slate-100">
    <label for="Email"class="block text-sm font-bold mb-4 m-4">Email</label>
        <input type="Email" id="Email"name="Email"placeholder="entrez l'email"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:ouline-none focus:shadow-outline bg-slate-100">
    <label for="Service"class="block text-sm font-bold mb-4 m-4">Service*</label>
    <select id="Service" name="Service" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-slate-100">
      <option value="" disabled selected>Choisissez un service</option>
      @foreach ($services as $service)
       <option value="{{$service->id}}">{{$service->name}}</option>
      @endforeach
     
      
    </select>
    
    <label for="Numero de telephone"class="block text-sm font-bold mb-4 m-4">Numéro de téléphone*</label>
        <input type="Numero de telephone" id="Numero de telephone"name="Numero de telephone"placeholder="entrez le Numero de telephone"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:ouline-none focus:shadow-outline bg-slate-100">
    <label for="Date et Heure du rendez-vous"class="block text-sm font-bold mb-4">Date et Heure du rendez-vous*</label>
        <p class="text-gray-700 m-4">Les dates avec un point rouge ne sont plus disponibles</p>
    
        <div class="flex flex-wrap">
  <!-- Jours de la semaine -->
  <div class="text-center m-2">Sun</div>
  <div class="text-center m-2">Mon</div>
  <div class="text-center m-2">Tue</div>
  <div class="text-center m-2">Wed</div>
  <div class="text-center m-2">Thu</div>
  <div class="text-center m-2">Fri</div>
  <div class="text-center m-2">Sat</div>

  <!-- Dates -->
  <div class="m-4">1</div>
  <div class="m-4">2</div>
  <div class="m-4">3</div>
  <div class="m-4">4</div>
  <div class="m-4">5</div>
  <div class="m-4">6</div>
  <div class="m-4">7</div>
  <div class="m-4">8</div>
  <div class="m-4">9</div>
  <div class="m-4">10</div>
  <div class="m-4">11</div>
  <div class="m-4">12</div>
  <div class="m-4">13</div>
  <div class="m-4">14</div>
  <div class="m-4">15</div>
  <div class="m-4">16</div>
  <div class="m-4">17</div>
  <div class="m-4">18</div>
  <div class="m-4">19</div>
  <div class="m-4">20</div>
  <div class="m-4">21</div>
  <div class="m-4">22</div>
  <div class="m-4">23</div>
  <div class="m-4">24</div>
  <div class="m-4">25</div>
  <div class="m-4">26</div>
  <div class="m-4">27</div>
  <div class="m-4">28</div>
  <div class="m-4">29</div>
  <div class="m-4">30</div>
  </div>
  <!-- Ajoutez les autres jours de la même manière -->

<label for="Heure du rendez-vous"class="block text-sm font-bold mb-4 m-4">Heure du rendez-vous*</label>
        <input type="Heure du rendez-vous" id="Heure du rendez-vous"name="Heure du rendez-vous"placeholder="entrez l'heure du rendez-vous"class="bg-slate-200 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:ouline-none focus:shadow-outline bg-slate-100">

    </div>
</div>
<a href="troisiemepage"><div class="bg-lime-900 text-center justify-center text-white mr-40 pr-40 ml-20 pl-20 rounded-full rounded-2xl">Prendre rendez-vous</div>
                </div>
<div class="bg-white">
   <p class="text-center text-blue-700 font-bold m-10">Contact</p>
     <div class="flex justify-center">
      <div class="bg-emerald-600 w-60 h-50 border p-4 m-4">
                <img src="{{asset('images/Group 188.png')}}">
                <h4 class="text-green-700 text-center m-2">EMERGENCY</h4>
                <p class="text-black text-center">(237) 661-812-255</p>
                <p class="text-black text-center">(237) 661-812-255</p>
</div>
<div class="bg-emerald-600 w-60 h-50 border p-4 m-4">
    <img src="{{asset('images/Group 178.png')}}">
                <h4 class="text-green-700 text-center m-2">Location</h4>
                <p class="text-black text-center">0123 some place</p>
                <p class="text-black text-center">9876 some country</p>
</div>
<div class="bg-emerald-600 w-60 h-50 border p-4 m-4">

    <img src="{{asset('images/Group 202.png')}}">
                <h4 class="text-green-700 text-center m-2">EMAIL</h4>
                <p class="text-black text-center">fildineeesoe@gmail.com</p>
                <p class="text-black text-center">myebstudios@gmail.com</p>
</div>
<div class="bg-emerald-600 w-60 h-50 border p-4 m-4">
    <img src="{{asset('images/Group 177.png')}}">
                <h4 class="text-green-700 text-center m-2">wORKING HOURS</h4>
                <p class="text-black text-center">Mon-sat 09:20:00</p>
                <p class="text-black text-center">Sunday Emergency only</p>
</div>
</div>
</div>
              </div>

<div class="bg-slate-900 mt-40" >
    <div class="flex justify-between">
       <div class="flex">
           <img class="mt-6 ml-6" src="{{asset('images/LOGOBIOSSO-removebg-preview 1.png')}}">
           <p class="pt-10 pr-4 ml-4 text-bold text-white">POLYCLINIQUE BIOSSO</p>
       </div>
      <div class="flex justify-between pr-20 pt-5">
        <img class="w-5 h-5 ml-2 mt-6" src="{{asset('images/Footer/Big/Social Icons.png')}}" >
        <img class="w-5 h-5 ml-2 mt-6" src="{{asset('images/Footer copy/Big/Social Icons.png1')}}" >
        <img class="w-5 h-5 ml-2 mt-6" src="{{asset('images/Footer copy 2/Big/Social Icons.png2')}}">
        <img class="w-5 h-5 ml-2 mt-6 " src="{{asset('images/Footer copy 3/Big/Social Icons.png3')}}">
      </div>
    </div> 
    <div class="flex justify-end text-white pr-10">
        <p>Copyright 2024 CLEPIOS</p>
    </div> 
    <div class="text-white flex justify-end pr-10">
      <p>All rights reserved</p>
    </div> 
</div>


















    </div>
    </div>
    </div>
</body>
</html>