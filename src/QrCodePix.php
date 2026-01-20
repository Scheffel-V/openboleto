<?php
declare(strict_types=1);

namespace OpenBoleto;

use chillerlan\QRCode\{QRCode};
use chillerlan\QRCode\{QROptions};

class QrCodePix
{
    /**
     * Generate a QR Code for Pix
     *
     * @param string|null $qrCode
     * @return string
     */
    public static function image($qrCode = null)
    {
        if (empty ($qrCode)) {
            return '';
        }

        $options = new QROptions([
            'version'       => QRCode::VERSION_AUTO, // Automatically fits data
            'scale'         => 5,                    // Reduced from default (usually 10+)
            'quietzoneSize' => 4,                    // Standard 4-module margin
        ]);
        return (new QRCode($options))->render($qrCode);
    }
}
