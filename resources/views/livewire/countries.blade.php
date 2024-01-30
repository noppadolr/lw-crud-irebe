<div>
    <button type="button" wire:click='OpenAddCountryModal()' class="btn btn-outline-primary btn-sm">Add New Country</button>
    <table class="table  table-hover table-responsive">
        <thead class="thead-inverse">
        <tr>
            <th>Continent</th>
            <th>Country</th>
            <th>Capital City</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Asia</td>
            <td>China</td>
            <td>Beijing</td>
        </tr>
        </tbody>

    </table>

    @include('modals.add-modal')
</div>
<script>
    document.addEventListener('livewire:initialized',()=>{
            @this.on('OpenAddCountryModal',(event)=>{
                $('.addCountry').modal('show');
                
            })




            // @this.on(OpenAddCountryModal,(event)=>{})
    })
</script>
