<?php
/**
 * Fungsi untuk cek status, merubah status menjadi Ya atau Tidak
 *
 * @param  int  $status
 * @return string
 * 		String dengan nilai Ya atau Tidak
 */
function cekStatus($status)
{
    return ($status == "1") ? "Ya" : "Tidak";
}

/**
 * Fungsi untuk mengkonversi tanggal menjadi format indo
 *
 * @param  string  $date
 * @return string
 * 		String dengan format Tgl Bulan Tahun, cth : 17 Agustus 1945
 */
function konversiTanggal($date)
{
    $tanggal = date("Y-m-d", strtotime($date));
    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

/**
 * Fungsi untuk menampilkan nominal dalam rupiah
 *
 * @param  int  $nominal
 * @return string
 */
function rp($nominal)
{
    return "Rp " . number_format($nominal, 2, ",", ".");
}

/**
 * Fungsi untuk menulis pesan log pada file txt
 *
 * @param string $pesan
 */
function writeLog($pesan)
{
    // Mengambil waktu saat ini
    $timestamp = date('Y-m-d H:i:s');

    // Format pesan log
    $logMessage = "[{$timestamp}] {$pesan}" . PHP_EOL;

    // Membuka file
    if (!$handle = fopen("./logs/log.txt", 'a')) {
        // gagal membuka file
        die('Failed to open log file for writing.');
    }

    // Menulis pesan log ke dalam file text
    if (fwrite($handle, $logMessage) === FALSE) {
        // gagal menulis pesan log
        die('Failed to write to log file.');
    }

    // Menutup file handle
    fclose($handle);
}
?>