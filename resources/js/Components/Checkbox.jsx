import {MDBCheckbox} from 'mdb-react-ui-kit';

export default function Checkbox({ className = '', ...props }) {
    return (
        <MDBCheckbox
            {...props}
            type="checkbox"
            className={
                'rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 ' +
                className
            }
        />
    );
}
