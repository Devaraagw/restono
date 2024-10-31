<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'third_party/phpqrcode/qrlib.php');

class Qr_code {
    public function generate($data, $filePath, $logoPath, $ecc = 'L', $pixelSize = 10, $frameSize = 2) {
        // Generate QR code
        QRcode::png($data, $filePath, $ecc, $pixelSize, $frameSize);

        // Add logo to QR code
        $this->addLogo($filePath, $logoPath);
    }

    private function addLogo($qrPath, $logoPath) {
        // Load QR code and logo images
        $qrImage = imagecreatefrompng($qrPath);
        $logoImage = imagecreatefrompng($logoPath);

        // Get dimensions
        $qrWidth = imagesx($qrImage);
        $qrHeight = imagesy($qrImage);
        $logoWidth = imagesx($logoImage);
        $logoHeight = imagesy($logoImage);

        // Resize logo to fit in the center of QR code
        $logoSize = $qrWidth / 5; // Adjust the size of the logo
        $logoResized = imagecreatetruecolor($logoSize, $logoSize);
        imagealphablending($logoResized, false);
        imagesavealpha($logoResized, true);
        imagecopyresampled($logoResized, $logoImage, 0, 0, 0, 0, $logoSize, $logoSize, $logoWidth, $logoHeight);

        // Calculate position to place the logo in the center
        $x = ($qrWidth - $logoSize) / 2;
        $y = ($qrHeight - $logoSize) / 2;

        // Merge the logo onto the QR code
        imagecopy($qrImage, $logoResized, $x, $y, 0, 0, $logoSize, $logoSize);

        // Save the final QR code image
        imagepng($qrImage, $qrPath);

        // Cleanup
        imagedestroy($qrImage);
        imagedestroy($logoImage);
        imagedestroy($logoResized);
    }
}
