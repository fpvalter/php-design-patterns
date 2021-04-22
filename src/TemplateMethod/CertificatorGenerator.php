<?php

declare(strict_types=1);

namespace App\TemplateMethod;

use App\TemplateMethod\Component\StudentDto;

abstract class CertificateGenerator
{
    public function processCertificateFlow(StudentDto $studentDto): void
    {
        $certificate = $this->generateCertificate($studentDto);
        $this->sendCertificateByEmail($studentDto, $certificate);
    }

    protected abstract function generateCertificate(StudentDto $studentDto): string;

    protected abstract function sendCertificateByEmail(StudentDto $studentDto, string $certificateString): void;

    protected function notifyStudentBySms(int $phoneNumber, string $studentName) {
        // This is just a simulation.
        print("SMS message sent to {$phoneNumber}: Hello {$studentName}, you certificate was generated.");
    }
}