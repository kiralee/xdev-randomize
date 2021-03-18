# Randomize package
This package will random number, string and element in the specific array.

## Requirements
### PHP >= 7.3
### Composer > 1.0

## How to use

### run by composer
    composer require xdev\randomize
### Add package to your code
    use Xdev\Support\Randomize\Random

call class **Random** and use static method

## Methods

### randomNumber ($min,$max):int
<table>
    <tr>
        <td>
            param
        </td>
        <td>
            type
        </td>
    </tr>
    <tr>
        <td>
            min
        </td>
        <td>
            integer
        </td>
    </tr>
    <tr>
        <td>
            max
        </td>
        <td>
            integer
        </td>
    </tr>
</table>
It will random number from min to max that using rand function from php default.
### randomString ($length):string
<table>
    <tr>
        <td>
            param
        </td>
        <td>
            type
        </td>
    </tr>
    <tr>
        <td>
            length
        </td>
        <td>
            integer
        </td>
    </tr>
</table>
It will random string using using random_bytes and bin2hex function from php default.
### randomElementInArray ($neededArray):mixed
<table>
    <tr>
        <td>
            param
        </td>
        <td>
            type
        </td>
    </tr>
    <tr>
        <td>
            neededArray
        </td>
        <td>
            array
        </td>
    </tr>
</table>
It will random element in needed array.

## License

MIT

## Author
Kiden Snapter, Duy Lucas






