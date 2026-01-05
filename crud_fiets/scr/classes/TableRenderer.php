<?php

namespace Demon\CrudFiets;

class TableRenderer
{
    public static function printCrudTabel(array $result): void
    {
        $table = "<table>";

        // Print header table
        $headers = array_keys($result[0]);
        $table .= "<tr>";
        foreach ($headers as $header) {
            $table .= "<th>" . $header . "</th>";
        }
        $table .= "<th colspan=2>Actie</th>";
        $table .= "</tr>";

        // Print rows
        foreach ($result as $row) {
            $table .= "<tr>";
            foreach ($row as $cell) {
                $table .= "<td>" . $cell . "</td>";
            }

            // Wijzig knopje
            $table .= "<td>
                <form method='post' action='update.php?id=$row[id]'>
                    <button>Wzg</button>
                </form>
            </td>";

            // Delete knopje
            $table .= "<td>
                <form method='post' action='delete.php?id=$row[id]'>
                    <button>Verwijder</button>
                </form>
            </td>";

            $table .= "</tr>";
        }
        $table .= "</table>";

        echo $table;
    }
}