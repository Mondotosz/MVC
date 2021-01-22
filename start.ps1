# Get configuration
$config = Get-Content -Path "$($PSScriptRoot)\config\config.json" | ConvertFrom-Json;
$php = "$($config.server.address):$($config.server.port)"
# Starts server
Set-Location -Path "$PSScriptRoot\public";
php -S $php;
# Start-Job -Name "PHP" -ScriptBlock { php -S localhost:8000 };
# Set-Location -Path "$PSScriptRoot";
# Start-Job -Name "NODE" -ScriptBlock { node index.js };

# do {
#     # Get-Job;
#     $command = Read-Host ">";
# } while ($command -ne "quit" -and $command -ne "q")


# Stop-Job -Name "PHP"; 
# Stop-Job -Name "NODE"; 
# Remove-Job -Name "PHP";
# Remove-Job -Name "NODE";