import { Head } from '@inertiajs/react';

interface Tea {
  id: number;
  name: string;
}

const Tea = ({ tea }: { tea: Tea }) => (
  <>
    <Head title="Tea" />
    <div className="py-12">
      <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
          <div className="p-6 text-gray-900 dark:text-gray-100">
            <h1 className="text-2xl font-semibold">Tea</h1>
            <h2>{tea.name}</h2>
          </div>
        </div>
      </div>
    </div>
  </>
);

export default Tea;
