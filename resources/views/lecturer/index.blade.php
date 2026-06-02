<x-app>

    <x-slot:title> {{ $title }} </x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('lecturer.create') }}" role="button">CREATE</a>
    <form action="" class= "mb-3">
        <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control" id="keyword" name="keyword"
                    placeholder="Search lecturer name..." value="{{ request('keyword') }}">
            </div>
            <div class="col-md-4">
                <select class="form-select" id="department_id" name="department_id">
                    <option value="">All Department</option>
                    @foreach ($Departments as $department)
                        <option value="{{ $department->id }}"
                            {{ request('department_id') == $department->id ? 'selected' : '' }}>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>

    </form>

    <ul class="list-group mb-3">
        @foreach ($Lecturers as $Lecturer)
            <li class="list-group-item">
                {{ $loop->iteration }}. {{ $Lecturer->name }} -- {{ $Lecturer->Department->name }}
                <a class="btn btn-info btn-sm " href="{{ route('lecturer.show', $Lecturer) }}"
                    role="button">Detail</a>
                <a class="btn btn-warning btn-sm " href="{{ route('lecturer.edit', $Lecturer) }}"
                    role="button">Edit</a>
                <form action="{{ route('lecturer.destroy', $Lecturer) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda Yakin')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $Lecturers->links() }}

</x-app>
