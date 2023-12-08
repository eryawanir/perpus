@include('layout.header', ['title' => 'Daftar Buku'])

<div class="container mt-3">
 <div class="row">
  <div class="col-12">

   <h2>Daftar Buku</h2>
   <a href="{{ route('books.create') }}" class="btn btn-primary">
    Tambah Buku
   </a>

   <table class="table table-striped">
    <thead>
     <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Pengarang</th>
      <th>Penerbit</th>
      <th>Tanggal Terbit</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     @forelse ($books as $book)
      <tr>
       <th>{{ $loop->iteration }}</th>
       <td>{{ $book->title }}</td>
       <td>{{ $book->author }}</td>
       <td>{{ $book->publisher }}</td>
       <td>{{ $book->published_at }}</td>
       <td>
        <a href="{{ route('books.update', $loop->index) }}" class="btn btn-primary">
         Update
        </a>
        <a href="{{ route('books.destroy', $loop->index) }}" class="btn btn-danger">
         Hapus
        </a>
       </td>
      </tr>
     @empty
      <td colspan="6" class="text-center">Tidak ada data...</td>
     @endforelse
    </tbody>
   </table>
  </div>
 </div>
</div>