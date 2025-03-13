echo "Running..."
TARGETS="src/core src/shared tests/Functional tests/Shared"

echo "The following directories will be removed:"
echo $TARGETS

read -p "Are you sure? (y/N): " CONFIRM
if [[ $CONFIRM =~ ^[Yy]$ ]]; then
  rm -rf $TARGETS
  echo "Cleaned OK!"
  echo "Suggest: Remove added controllers in config/routes.yaml"
else
  echo "Operation canceled."
fi
