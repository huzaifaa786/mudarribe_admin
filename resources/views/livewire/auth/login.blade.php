<div>
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <section>
          <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
            <div class="container z-10">
              <div class="flex flex-wrap mt-0 -mx-3">
                <div class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                  <div class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                      <h3 class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text">Welcome back</h3>
                      <p class="mb-0">Enter your email and password to sign in</p>
                    </div>
                    <div class="flex-auto p-6">

                        <x-input label="Email" placeholder="Enter your email" wire:model='email' />
                        <x-inputs.password label="Password" placeholder="Password" wire:model='password' />
                        <x-toggle label="Remember me" wire:model.defer="model" />
                        <div class="text-center">
                          <button type="button" wire:click='login' class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Sign in</button>
                        </div>

                    </div>
                  </div>
                </div>
                <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                  <div class="absolute top-0 hidden w-3/5 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
                    <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10" style="background-image: url('{{asset('admin/assets/img/curved-images/curved6.jpg')}}')"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
</div>
