<?php
// Inclui o arquivo de conexão com o banco de dados
include('dbconnect.php');

// Query para selecionar todos os dados da tabela ficha_tipo_de_ocorrencia
$sql = "SELECT * FROM ficha_tipo_de_ocorrencia";
$result = $conn->query($sql);

// Verifica se a consulta foi bem-sucedida
if ($result) {
    // Obtém o número de colunas na tabela
    $num_fields = $result->field_count;

    // Exibe os dados em uma tabela HTML
    echo "<table border='1'>
            <tr>
                <th>ID</th>";

    // Loop para obter os nomes das colunas
    $column_names = [];
    while ($field_info = $result->fetch_field()) {
        $column_names[] = $field_info->name;
    }

    // Exibe as colunas na tabela
    foreach ($column_names as $col_name) {
        echo "<th>$col_name</th>";
    }

    echo "</tr>";

    // Loop através dos resultados e exibe cada linha
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['idTipo_de_Ocorrencia'] . "</td>";

        // Exibe os valores para cada coluna
        foreach ($column_names as $col_name) {
            // Verifica se o valor é nulo antes de exibir
            $value = ($row[$col_name] !== null) ? $row[$col_name] : "N/A";
            echo "<td>" . $value . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Erro na consulta: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
