<template>

<form action="playthegame" method="post">

  <div class="blue-glass w-full">
    <label for="username" class=" text-orange"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="userame" required>

    <label for="password" class=" text-orange"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

   
    <label class="w-full">
      <input type="checkbox" class=" text-orange" checked="checked" name="remember"> Remember me
    </label>
    <div class="w-full text-gray-800">
  <button type="submit" class="py-2 px-2 bg-pink text-black">Login</button>
    <a type="button" class="cancelbtn py-2 px-2 bg-green">Register</a>
</div>
    <span class="password w-full"><a href="#">Forgot password?</a></span>
  </div>
  
</form>
<!-- <link rel="stylesheet" type="text/css" href="@/css/app.css"> -->
    </template>
