<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
{{ old("examinee_number") }}

<body>
  <section class="bg-indigo-100">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-2">
        <img class="w-24" src="https://ppds.anestesi.ulm.ac.id/wp-content/uploads/2021/07/ulmperdatin-300x149.png" alt="logo">
      </a>
      <p class="text-2xl font-semibold text-gray-900 mb-6">CPPDS Anestesiologi</p>
      <div class="w-full md:mt-0 sm:max-w-3xl xl:p-0 flex justify-center md:justify-between items-center">
        <div class="hidden md:block w-1/3">
          <img src="./img/undraw_online_test.svg" />
        </div>
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8 bg-white rounded-lg shadow w-3/5">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-xl">
            Masuk
          </h1>

          <form class="space-y-4 md:space-y-6" action="/login" method="post">
            @csrf
            <div>
              <label for="examinee_number" class="block mb-2 text-sm font-medium text-gray-900">No. Peserta Ujian</label>
              <input type="string" name="examinee_number" id="examinee_number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" required value="{{ old('examinee_number') }}">
            </div>
            <button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if(session()->has('loginError'))
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: "top",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
      }
    });

    Toast.fire({
      icon: "error",
      title: "{{ session('loginError') }}"
    });
  </script>
  @endif

</body>

</html>