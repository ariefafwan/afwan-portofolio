<!-- Modal Untuk Show Data -->
<div class="modal fade" id="showmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Skills Kategori</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nama Skill Kategori</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($skillkategori as $index => $all)
                    <tr>
                        <td align="center" scope="row">{{ $index + 1 }}</td>                                
                        <td align="left">{{ $all->skill_kategori }}</td>
                        <td>
                            <div class="d-flex justify-content-evenly">
                            <a href="javascript:void(0)" class="btn btn-danger"
                                onclick="event.preventDefault();
                                        document.getElementById('skillkategori-delete-form-{{$all->id}}').submit();">
                                <i class="bi bi-trash"></i>
                            </a>
                            <form id="skillkategori-delete-form-{{$all->id}}"
                                action="{{ route('skillkategori.destroy',$all->id) }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    </div>
</div>