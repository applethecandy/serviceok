<script defer src="{{ mix('js/admin.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ mix('css/admin.css') }}" />


<h1>Мастера</h1>

<div class="table-responsive-vertical shadow-z-1">
    <table id="table" class="table table-hover table-mc-light-blue">
        <thead>
            <tr>
                {{-- <th>ID</th> --}}
                <th>Name</th>
                <th>Surname</th>
                <th>City</th>
                <th>Phone</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($masters as $master)
                <tr>
                    {{-- <td data-title="ID">{{ $master->id }}</td> --}}
                    <td data-title="Name">{{ $master->name }}</td>
                    <td data-title="Surname">{{ $master->surname }}</td>
                    <td data-title="City">{{ $master->city }}</td>
                    <td data-title="Phone">{{ $master->phone }}</td>
                    <td data-title="Phone">{{ $master->created_at->format('d.m.Y H:m:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<h1>Клиенты</h1>

<div class="table-responsive-vertical shadow-z-1">
    <table id="table" class="table table-hover table-mc-light-blue">
        <thead>
            <tr>
                {{-- <th>ID</th> --}}
                <th>Client</th>
                <th>Service</th>
                <th>Date and Time</th>
                <th>Address</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td data-title="client">{{ $client->name }},<br>{{ $client->phone }}</td>
                    <td data-title="name" class="hidden">{{ $client->name }}</td>
                    <td data-title="phone" class="hidden">{{ $client->phone }}</td>
                    <td data-title="service">{{ $client->work->service->title }}</td>
                    <td data-title="datetime">{{ $client->work->date }} {{ $client->work->time }}</td>
                    <td data-title="address">{{ $client->work->address }}</td>
                    <td data-id="{{ $client->id }}" class="editable">
                        {{ $client->work->comment }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="input" id="id"><b>ID: </b></div>
        <div class="input" id="name"><b>Name: </b></div>
        <div class="input" id="phone"><b>Phone: </b></div>
        <div class="input" id="service"><b>Service: </b></div>
        <div class="input" id="datetime"><b>Date and Time: </b></div>
        <div class="input" id="address"><b>Address: </b></div>
        <div><b>Comment: </b></div>
        <textarea id="comment"></textarea>
        <div class="modal-submit">
            <input class="submit" type="submit" />
        </div>
        @method('PUT')
        @csrf
    </div>

</div>

<a href="{{ route('admin.logout') }}">Log out</a>
