<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>
  <!-- <div class="bg-indigo-500 text-white py-3">
    <h1 class="text-2xl text-center">Ujian Tes Online CPPDS Prodi Spesialis Anestesiologi FK ULM, Senin 04 Januari 2024</h1>
  </div> -->
  <div class="border-b w-full shadow-md">
    <div class="max-w-6xl w-full mx-auto py-2 flex justify-between">
      <div>
        <p>CPPDS</p>
      </div>
      <div>
        <form method="post" action="/logout">
          @csrf
          <button class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 pb-1 rounded text-lg">
            Keluar
          </button>
        </form>
      </div>
    </div>
  </div>

  <main class="pt-4 w-full bg-indigo-100 text-lg">
    <div class="text-center rounded-md py-4 text-2xl mb-4">
      <h1 class="font-medium">Ujian Tes Online CPPDS Prodi Spesialis Anestesiologi FK ULM, Senin 31 Juli 2023</h1>
    </div>
    <div class="h-screen">
      <div class="flex justify-between max-w-6xl w-full mx-auto">
        <div class="bg-white pb-2 rounded-lg shadow-md border border-gray-300" style="width: 48%;">
          <div class="text-center pt-2 border-b border-gray-200 pb-2 bg-indigo-500 text-white overflow-hidden rounded-t-lg">
            <p class="text-xl font-medium">Aturan pengerjaan Tes Online</p>
          </div>
          <div class="px-5 py-2">
            <ul>
              <li>
                1. Peserta CPPDS dilarang membuka tab/halaman baru untuk mengakses bantuan dan lainnya
              </li>
              <li>
                2. Peserta CPPDS dilarang berkerja sama dalam menjawab soal
              </li>
              <li>
                3. Waktu pengerjaan soal 60 menit setelah dimulai
              </li>
              <li>
                4. Peserta CPPDS harus selesai menjawab soal sebelum waktu yang ditentukan habis, karena soal akan otomatis tertutup apabila waktu habis.
              </li>
              <li>
                5. Sebelum submit, perhatikan kembali jawaban anda apakah sudah terjawab semua atau belum
              </li>

            </ul>
          </div>
        </div>

        <div class="bg-white pb-2 rounded-lg shadow-md border border-gray-300" style="width: 48%;">
          <div class="text-center border-b border-gray-200 py-2 bg-indigo-500 text-white rounded-t-lg">
            <p class="text-xl font-medium">Informasi Peserta</p>
          </div>
          <div class="px-5 py-2">
            <table>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>Muhammad Agi Sahriza Daan Nur</td>
              </tr>
              <tr>
                <td>No. Peserta</td>
                <td>:</td>
                <td>1810131310020</td>
              </tr>
              <tr>
                <td>Asal Fakultas</td>
                <td>:</td>
                <td>Fakultas Keguruan dan Ilmu Pendidikan ULM</td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="flex justify-center mt-6">
        <a href="/start-quiz" class="bg-indigo-500 hover:bg-indigo-600 text-white text-lg px-4 pb-1 rounded text-">
          Mulai
        </a>
      </div>
    </div>
  </main>
</body>

</html>