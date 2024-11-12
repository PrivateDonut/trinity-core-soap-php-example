# TrinityCore SOAP PHP Client

This repository contains PHP examples and reusable code for creating a SOAP connection to a Trinity Core 3.3.5a server. The provided code demonstrates how to establish a secure and reusable connection for executing server commands via SOAP.

## Features

- **Reusable Connection**: The SOAP client class allows for easy and consistent connection setup.
- **Configuration Management**: Stores connection details (host, port, username, password) in a separate configuration file.
- **Error Handling**: Catches and handles exceptions, providing clear error messages if the connection fails or a command cannot execute.
- **Multiple Command Execution**: Use the client to execute various commands from different files with a single setup.

## Project Structure

- **`TrinityCoreSoapClient.php`** - The main reusable SOAP client class. It initializes the SOAP client using configuration data and provides a method for executing commands.
- **`config/soap_data.php`** - Configuration file storing Trinity Core connection details (host, port, username, password).
- **`soap_config_loader.php`** - Loads the configuration and initializes an instance of `TrinityCoreSoapClient` for use across other files.
- **Examples**:
  - **`online_accounts.php`** - Demonstrates using the client to display current accounts online

## Getting Started

### Prerequisites

- PHP installed on your server.
- Access to a Trinity Core 3.3.5a server with SOAP enabled.

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/TrinityCoreSoapClient.git
   cd TrinityCoreSoapClient
