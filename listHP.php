<?php
include_once("../connection/su_conn.php");

$su_listHP_query = "SELECT * FROM mbsahp";
$HP_results = $dbmysql->get_results($su_listHP_query);

//$su_dbmysql->debug();
?>


<table class="table table-bordered border-primary">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Bil</th>
            <th scope="col">Model Name</th>
            <th scope="col">S/N</th>
            <th scope="col">Problem Descriptions</th>
            <th scope="col">PIC Name</th>
            <th scope="col">No Contact</th>
            <th scope="col">Address</th>
            <th scope="col">Reported Date</th>
            <th scope="col">Case ID</th>
            <th scope="col">Created By</th>
            <th scope="col">Case Progress</th>
            <th scope="col">Notes</th>
            <th scope="col">Options</th>

        </tr>
    </thead>
    <tbody>

        <?php
         $bil = 0;
         foreach ((array) $HP_results as $data) {
             print is_array($data);
             $bil = $bil + 1;
        ?>

            <tr <?php if ($data->CaseProgress == 'On-Going') {
                    echo 'class="table-danger"';
                } elseif ($data->CaseProgress == 'Completed') {
                    echo 'class="table-success"';
                } ?>>
                <th scope="row"><?php echo $bil; ?></th>
                <td><?php echo $data->ModelName; ?></td>
                <td><?php echo $data->SN; ?></td>
                <td><?php echo $data->ProblemDesc; ?></td>
                <td><?php echo $data->PICName; ?></td>
                <td><?php echo $data->NoContact; ?></td>
                <td><?php echo $data->Address; ?></td>
                <td><?php echo $data->Date; ?></td>
                <td><?php echo $data->CaseID; ?></td>
                <td><?php echo $data->CreatedBy; ?></td>
                <td>
                    <?php if ($data->CaseProgress == 'Completed') echo "Completed";
                    else echo "On-Going"; ?></td>
                    
                </td>
                <td><?php echo $data->Notes; ?></td>
                <td> <img onClick="su_callformupdate_report(<?php echo $data->id; ?>);" style="cursor:pointer" src="https://icons.iconarchive.com/icons/bokehlicia/captiva/24/edit-icon.png" width="37" height="37" title="Edit Report" />
                    <br><br />
                    <img onClick="su_callformdelete_report(<?php echo $data->id; ?>);" style="cursor:pointer" src="https://icons.iconarchive.com/icons/hopstarter/soft-scraps/128/Folder-Delete-icon.png" width="32" height="32" title="Delete Report" />
                </td>
                <script>
                    $(document).ready(function() {
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                    });

                    function su_callformupdate_report(id) {
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                        $.post("HPform_update.php", {
                            reportid: id
                        }, function(data) {
                            $("#hp_form_here").html(data);
                        });
                    }

                    function su_callformdelete_report(id) {
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                        $.post("HPform_delete.php", {
                            reportid: id
                        }, function(data) {
                            $("#hp_form_here").html(data);
                        });
                    }
                </script>
            </tr>

        <?php } ?>
    </tbody>


</table>