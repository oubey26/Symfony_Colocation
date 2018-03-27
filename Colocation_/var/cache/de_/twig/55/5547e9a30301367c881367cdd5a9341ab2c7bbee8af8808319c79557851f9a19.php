<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e5105a46c2dcf8f1086fc3b627c1437f63a095e1993359e4124fe8d87d746866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4f129692cc59b7bceed3ea0e4c036600f905e7647131504a22ef6575bae9526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f129692cc59b7bceed3ea0e4c036600f905e7647131504a22ef6575bae9526->enter($__internal_c4f129692cc59b7bceed3ea0e4c036600f905e7647131504a22ef6575bae9526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_99008a3f3069af05916b384a67a7888482deea6384893339c41fcbb246e8011e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99008a3f3069af05916b384a67a7888482deea6384893339c41fcbb246e8011e->enter($__internal_99008a3f3069af05916b384a67a7888482deea6384893339c41fcbb246e8011e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c4f129692cc59b7bceed3ea0e4c036600f905e7647131504a22ef6575bae9526->leave($__internal_c4f129692cc59b7bceed3ea0e4c036600f905e7647131504a22ef6575bae9526_prof);

        
        $__internal_99008a3f3069af05916b384a67a7888482deea6384893339c41fcbb246e8011e->leave($__internal_99008a3f3069af05916b384a67a7888482deea6384893339c41fcbb246e8011e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
