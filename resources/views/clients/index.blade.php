<h1>Clients</h1>
<ul>    
    <li>Jean</li>    
    <li>Marc</li>    
    <li>Virginie</li>
</ul>

<ul>    
    <?php foreach ($clients as $client): ?>    
    <li><?= $client ?></li>    
    <?php endforeach; ?>
</ul>
<ul>    
    @foreach ($clients as $client)    
    <li>{{ $client }}</li>    
    @endforeach
</ul>


