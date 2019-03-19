<table class="text-center margin-0auto">
<thead>Calendario</thead>
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