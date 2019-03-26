<div class="table-responsive-sm w-50 mh-50">
    <table class="">
        <thead class="thead-dark">Calendario</thead>
        <?php $i = 0; ?>
        @for ($s=0; $s < 4; $s++)
            <tr>
                @for ($d=0; $d < 7; $d++)
                <?php $i++; ?>
                    <td>{{ $i }}</td>
                @endfor
            </tr>
        @endfor
    </table>
</div>