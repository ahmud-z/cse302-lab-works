function checkPalindrome(num) {
    let temp = num;
    let reverseNum = 0;

    while (temp != 0) {
        let remainder = temp % 10;
        reverseNum = (reverseNum * 10) + remainder;
        temp = Math.floor(temp / 10);
    }

    if (reverseNum == num) {
        console.log('Palindrome');
    } else {
        console.log('Not Palindrome');
    }
}

function main() {
    let num = prompt('Enter a number: ');
    checkPalindrome(num);
}

main();