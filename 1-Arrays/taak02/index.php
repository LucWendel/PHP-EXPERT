<?php
$medewerkers = [
    [
      'voornaam' => 'Willem',
      'achternaam' => 'van Oranje',
      'functie'  => 'koning'
    ],
    [
      'voornaam' => 'Donald',
      'achternaam' => 'Trump',
      'functie'  => 'president'
    ],
    [
      'voornaam' => 'Homer',
      'achternaam' => 'Simpson',
      'functie'  => 'fabrieksarbeider'
    ],
    [
      'voornaam' => 'Johan',
      'achternaam' => 'Cruyff',
      'functie'  => 'voetbalicoon'
    ]
    ,
    [
      'voornaam' => 'Badr',
      'achternaam' => 'Hari',
      'functie'  => 'Kickboxer'
    ]
  ];
?>

<?php  foreach($medewerkers as $row): ?>
    <tr>
          <td><?=$row['voornaam'];?></td>
          <td><?=$row['achternaam'];?></td>
          <td><?=$row['functie'];?></td>
    </tr>
<?php endforeach;?>