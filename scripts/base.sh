#Base Script

if [ "$USER" != "root" ]
then
	echo "Please run this script again as sudo"
	exit 1
fi

HASBREW=$(which brew)

if [ -z "$HASBREW" ]
then
	echo Please install Homebrew package manager.
	exit 1
fi

source ~/.profile