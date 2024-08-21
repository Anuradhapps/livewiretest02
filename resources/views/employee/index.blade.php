<x-app>
    <h1>employeee</h1>
    @foreach ($employees as $employee)
        <li>{{ $employee->name }}</li>
    @endforeach
</x-app>
