export default function yesNo(value: any) {
  if (value === false) return 'No';
  if (value === true) return 'Si';
  return '!!!';
}
