<x-app>

    <x-slot:title> {{ $title }} </x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('lecturer.create') }}" role="button">CREATE</a>

    <ul class="list-group">
        @foreach ($Lecturers as $Lecturer)
            <li class="list-group-item">
                {{ $loop->iteration }}. {{ $Lecturer->name }} -- {{ $Lecturer->Department->name }}
                <a class="btn btn-warning btn-sm " href="{{ route('lecturer.edit', $Lecturer) }}" role="button">Edit</a>
                <form action="{{ route('lecturer.destroy', $Lecturer) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda Yakin')">Delete</button>
                </form>
            </li>
        @endforeach

    </ul>

</x-app>
