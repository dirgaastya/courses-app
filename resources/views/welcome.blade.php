@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white relative pt-10 pb-10 lg:pt-10 lg:px-10 lg:flex lg:items-center lg:justify-between dark:bg-gray-900">
    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto lg:text-left xl:text-7xl dark:text-white">
            You can 
            <br class="lg:block hidden"> 
            <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 dark:from-blue-400 dark:to-cyan-300">
                learning 
            </span>anything.
        </h1>
        <div class="lg:flex">
            <div class="relative mt-8 md:mt-16 space-y-8 sm:w-10/12 md:w-2/3 lg:ml-0 sm:mx-auto text-center lg:text-left lg:mr-auto lg:w-7/12">
                <p class="sm:text-lg text-gray-700 dark:text-gray-300 lg:w-11/12">
                    Tingkatkan keterampilan bersama kami.
                </p>
                <div class="flex justify-center lg:justify-start">
                    <a href="#" class="p-4 border border-gray-200 dark:bg-gray-800 dark:border-gray-700 rounded-full duration-300 hover:border-cyan-400 hover:shadow-lg hover:shadow-cyan-600/20 dark:hover:border-cyan-300/30">
                        <div class="flex justify-center space-x-4">
                            <span class="font-medium dark:text-white">Join Class Here</span>
                        </div>
                    </a> 
                </div>
            </div>
            
        </div>
    </div>
    <div class="mt-12 md:mt-0 lg:w-2/4">
        <div class="relative w-full">
            <div aria-hidden="true" class="absolute scale-75 md:scale-110 inset-0 m-auto w-32 h-32 md:w-48 md:h-48 rounded-full rotate-45 bg-gradient-to-r from-sky-500 to-cyan-300 blur-3xl"></div>
            <div class="relative w-full">
                <img src={{'./assets/img/avatar.png'}} class="mx-auto" alt="wath illustration" loading="lazy" width="320" height="280">
            </div>
        </div>
    </div>
</div>


<div class="dark:bg-gray-900 py-16">
    <div class="xl:container m-auto px-6 text-gray-600 md:px-10">
      <div class=" space-y-6 md:flex md:gap-6 justify-center md:space-y-0 lg:items-center">
        <div class="md:5/12 lg:w-1/2 rounded overflow-hidden">
          <img
            src={{'./assets/img/student.jpg'}}
            alt="image"
            loading="lazy"
            width=""
            height=""
          />
        </div>
        <div class="md:7/12 lg:w-1/2">
          <h2 class="text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">
            Learn without limits
          </h2>
          <p class="my-8 text-gray-600 dark:text-gray-300">
            Start, switch, or advance your career with more than 5,200 courses, Professional Certificates, and degrees from world-class universities and companies.
          </p>
  
          <a
              href="https://tailus.io/contact"
              class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-full before:bg-sky-100 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max"
            >
              <span
                class="relative text-base font-semibold text-sky-600 dark:text-white "
                >Browse now</span
              >
          </a>
        </div>
      </div>
    </div>
</div>


<div class="dark:bg-gray-900 py-16">
    <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
      <div class="grid gap-6 lg:grid-cols-9">
        <div class="lg:col-span-3">
          <div class="space-y-4 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none bg-white dark:bg-gray-800 px-8 py-12  sm:px-12 lg:px-8">
            <img
              src={{'./assets/img/services1.png'}}
              alt="illustration"
              loading="lazy"
              class="w-40 h-40 object-cover mx-auto"
            />
            <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Web Development</h3>
            <p class="mb-6 text-gray-600 dark:text-gray-300">
              Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur
              ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
            </p>
            <a href="#" class="block font-medium text-primary">Know more</a>
          </div>
        </div>
        <div class="lg:col-span-3">
          <div
            class="flex h-full flex-col justify-between rounded-3xl border border-gray-100 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none bg-white dark:bg-gray-800 px-8 py-12  sm:px-12 lg:px-8"
          >
            <div class="mb-6 space-y-4">
              <img
                src={{'./assets/img/services2.png'}}
                alt="illustration"
                loading="lazy"
                class="w-40 h-40 object-cover mx-auto"
              />
              <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Web Development Mentoring</h3>
              <p class="text-gray-600 dark:text-gray-300">
                Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur
                ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
              </p>
            </div>
            <a href="#" class="block font-medium text-primary">Know more</a>
          </div>
        </div>
        <div class="lg:col-span-3">
          <div
            class="flex h-full flex-col justify-between rounded-3xl border border-gray-100 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none bg-white dark:bg-gray-800 px-8 py-12  sm:px-12 lg:px-8"
          >
            <div class="mb-6 space-y-4">
              <img
                src={{'./assets/img/services3.png'}}
                alt="illustration"
                loading="lazy"
                class="w-40 h-40 object-cover mx-auto"
              />
              <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Web Development Training</h3>
              <p class="text-gray-600 dark:text-gray-300">
                Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur
                ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
              </p>
            </div>
            <a href="#" class="block font-medium text-primary">Know more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="dark:bg-gray-900 py-16">
    <div class="xl:container m-auto px-6 text-gray-600 dark:text-gray-300 md:px-12 xl:px-6">
      <h2 class="mb-12 text-center text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
        What's our customers say
      </h2>
      <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
        <div
          class="row-span-2 rounded-3xl border border-gray-100 dark:border-gray-700 dark:bg-gray-800 p-8 text-center shadow-2xl shadow-gray-600/10 dark:shadow-none"
        >
          <div class="flex h-full flex-col justify-center space-y-4">
            <img
              class="mx-auto h-20 w-20 rounded-full"
              src={{"assets/img/second_user.webp"}}
              alt="user avatar"
              height="220"
              width="220"
              loading="lazy"
            />
            <p class="md:text-xl">
              <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam
              consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti
              repudiandae ad doloribus. <span class="font-serif">"</span>
            </p>
            <div>
              <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
              <span class="text-xs text-gray-500">Product Designer</span>
            </div>
          </div>
        </div>
  
        <div class="rounded-3xl sm:flex sm:space-x-8 border border-gray-100 dark:border-gray-700 dark:bg-gray-800 p-8 text-center shadow-2xl shadow-gray-600/10 dark:shadow-none">
          <img
            class="mx-auto h-20 w-20 rounded-full"
            src={{"assets/img/first_user.webp"}}
            alt="user avatar"
            height="220"
            width="220"
            loading="lazy"
          />
          <div class="mt-4 space-y-4 text-center sm:mt-0 sm:text-left">
            <p >
              <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam
              consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti
              repudiandae ad doloribus. <span class="font-serif">"</span>
            </p>
            <div>
              <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
              <span class="text-xs text-gray-500">Product Designer</span>
            </div>
          </div>
        </div>
        <div class="rounded-3xl sm:flex sm:space-x-8 border border-gray-100 dark:border-gray-700 dark:bg-gray-800 p-8 text-center shadow-2xl shadow-gray-600/10 dark:shadow-none">
          <img
            class="mx-auto h-20 w-20 rounded-full"
            src={{"assets/img/third_user.webp"}}
            alt="user avatar"
            height="220"
            width="220"
            loading="lazy"
          />
          <div class="mt-4 space-y-4 text-center sm:mt-0 sm:text-left">
            <p>
              <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam
              consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti
              repudiandae ad doloribus. <span class="font-serif">"</span>
            </p>
            <div>
              <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
              <span class="text-xs text-gray-500">Product Designer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection