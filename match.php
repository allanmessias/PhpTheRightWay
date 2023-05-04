<?php

$paymentStatus;

$paymentStatusDisplay = match($paymentStatus) {
    1 => 'Paid',
    2 => 'Payment Declined',
    3 => 'Pending Payment',
    default => 'Unknown payment status'
};

echo $paymentStatusDisplay;