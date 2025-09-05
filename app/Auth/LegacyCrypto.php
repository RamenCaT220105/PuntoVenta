<?php

namespace App\Auth;

class LegacyCrypto
{
    public static function encrypt(string $x): string
    {
        $i = 1;
        $aux = '';
        $result = '';

        // Si no termina en "-", se considera "no encriptado"
        if (!str_ends_with($x, '-')) {
            // Reorganizar: pares primero
            while ($i < strlen($x)) {
                $aux .= $x[$i];
                $i += 2;
            }

            // Luego los impares
            $i = 0;
            while ($i < strlen($x)) {
                $aux .= $x[$i];
                $i += 2;
            }

            // Restar 10 al ASCII
            foreach (str_split($aux) as $c) {
                $result .= chr(ord($c) - 10);
            }

            return $result . '-';
        } else {
            // Quitar el "-"
            $x = substr($x, 0, -1);
            $half = intdiv(strlen($x), 2);
            $extra = strlen($x) % 2;
            $i = 1;

            while ($half + 1 >= $i) {
                if ($half + 1 > $i || $extra != 0) {
                    $aux .= $x[$half + $i - 1] ?? '';
                }

                if ($half >= $i) {
                    $aux .= $x[$i - 1] ?? '';
                }

                $i++;
            }

            // Sumar 10 al ASCII
            foreach (str_split($aux) as $c) {
                $result .= chr(ord($c) + 10);
            }

            return $result;
        }
    }
}
