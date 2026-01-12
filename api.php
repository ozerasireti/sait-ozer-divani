<?php
header("Content-Type: application/json");

/* 🔴 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 */
$OPENAI_KEY = "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";

$data=json_decode(file_get_contents("php://input"),true);
$bot=$data["bot"]??"";
$mesaj=$data["mesaj"]??"";

$profil=[
"Kerem Özer"=>"Genç, zeki, net konuşur.",
