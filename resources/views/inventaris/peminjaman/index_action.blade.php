<form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" method="POST">
    @csrf
    @method('DELETE')
    
    <span class="dropdown">
        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false"
            title="Menu">
            <i class="fa flaticon-more-1 text-danger"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right"
            style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-32px, 27px, 0px);"
            x-placement="bottom-end">
            <a class="dropdown-item" href="{{ route('peminjaman.edit', $peminjaman->id) }}"><i class="la la-edit"></i>Ubah</a>
            <button class="dropdown-item" type="submit" onclick="return confirm('Hapus data ini ?')">
                <i class="la la-trash"></i>Hapus
            </button>
            <a class="dropdown-item" href="{{ route('kembalikan.view', $peminjaman->id) }}"><i class="la la-mail-reply"></i>Kembalikan</a>
        </div>
    </span>

    <a href="{{ route('peminjaman.show', $peminjaman->id) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Detail">
        <i class="fa fa-search text-brand"></i>
    </a>

</form>