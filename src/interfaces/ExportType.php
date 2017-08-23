<?php
namespace kak\widgets\grid\interfaces;

interface ExportType
{
    const CSV = 'csv';
    const XLSX = 'xlsx';
    const GOOGLE = 'spreadsheets';
    const ODS  = 'ods';
    const JSON = 'json';
    const XML  = 'xml';
    const TXT  = 'txt';
    const HTML = 'html';
}