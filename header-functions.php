<?php

function fetch_topbar($field_type)
{
    global $con;
    $query = "SELECT * FROM general_settings WHERE section_type = 'topbar' AND field_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record['field_value'];
}


function fetch_header($field_type)
{
    global $con;
    $query = "SELECT * FROM general_settings WHERE section_type = 'header' AND field_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record['field_value'];
}

function fetch_index($field_type)
{
    global $con;
    $query = "SELECT * FROM general_settings WHERE section_type = 'index' AND field_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record['field_value'];
}
function fetch_menu()
{
    global $con;
    $query = "SELECT * FROM table_menu WHERE is_active=1";
    $execute = $con->query($query);
    $menuarray = array();
    while ($row = $execute->fetch_assoc()) {
        $menuarray[] = $row;
    }
    return $menuarray;
}


function fetch_content($field_type)
{
    global $con;
    $query = "SELECT * FROM tbl_content WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}
function fetch_icon($field_type)
{
    global $con;
    $query = "SELECT * FROM iconi WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}

function fetch_icontxt($field_type)
{
    global $con;
    $query = "SELECT * FROM iconl WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}
function fetch_about1($field_type)
{
    global $con;
    $query = "SELECT * FROM about1 WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}
function fetch_about2($field_type)
{
    global $con;
    $query = "SELECT * FROM about2 WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}

function fetch_slides($field_type)
{
    global $con;
    $query = "SELECT * FROM slides WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}
function fetch_counter($field_type)
{
    global $con;
    $query = "SELECT * FROM counter WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}
function fetch_action($field_type)
{
    global $con;
    $query = "SELECT * FROM action WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}
function fetch_services($field_type)
{
    global $con;
    $query = "SELECT * FROM services WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}

function fetch_team($field_type)
{
    global $con;
    $query = "SELECT * FROM team WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}
function fetch_pnav($field_type)
{
    global $con;
    $query = "SELECT * FROM pnav WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}
function fetch_pimg($field_type)
{
    global $con;
    $query = "SELECT * FROM pimg WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}
function fetch_pname($field_type)
{
    global $con;
    $query = "SELECT * FROM pname WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}
function fetch_category($field_type)
{
    global $con;
    $query = "SELECT * FROM category WHERE section_type = '$field_type' ";
    $execute = $con->query($query);
    $record = $execute->fetch_assoc();
    return $record;
}


