<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Icon/cache.svg */
class __TwigTemplate_65c296020268c6faa8231fd2dc64280dff2f7cf217fb726f30a0e66c97716972 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/cache.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/cache.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAA\" d=\"M2.26 6.09l9.06-4.67a1.49 1.49 0 0 1 1.37 0l9.06 4.67a1.49 1.49 0 0 1 0 2.65l-9.06 4.67a1.49 1.49 0 0 1-1.37 0L2.26 8.74a1.49 1.49 0 0 1 0-2.65zM20.55 11L12 15.39 3.45 11a1.36 1.36 0 0 0-1.25 2.42l9.17 4.73a1.36 1.36 0 0 0 1.25 0l9.17-4.73A1.36 1.36 0 0 0 20.55 11zm0 4.47L12 19.86l-8.55-4.41a1.36 1.36 0 0 0-1.25 2.42l9.17 4.73a1.36 1.36 0 0 0 1.25 0l9.17-4.73a1.36 1.36 0 0 0-1.25-2.42z\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/cache.svg";
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAA\" d=\"M2.26 6.09l9.06-4.67a1.49 1.49 0 0 1 1.37 0l9.06 4.67a1.49 1.49 0 0 1 0 2.65l-9.06 4.67a1.49 1.49 0 0 1-1.37 0L2.26 8.74a1.49 1.49 0 0 1 0-2.65zM20.55 11L12 15.39 3.45 11a1.36 1.36 0 0 0-1.25 2.42l9.17 4.73a1.36 1.36 0 0 0 1.25 0l9.17-4.73A1.36 1.36 0 0 0 20.55 11zm0 4.47L12 19.86l-8.55-4.41a1.36 1.36 0 0 0-1.25 2.42l9.17 4.73a1.36 1.36 0 0 0 1.25 0l9.17-4.73a1.36 1.36 0 0 0-1.25-2.42z\"/>
</svg>
", "@WebProfiler/Icon/cache.svg", "D:\\Back_END\\OSPanel\\domains\\symfony2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\cache.svg");
    }
}
