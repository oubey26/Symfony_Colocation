<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_a1c07ce6dc0d7d4ab807958b6cceac96059531e8e3dec42f428eecdf484421ed extends Twig_Template
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
        $__internal_ace995f69e007339fa2231fd5fe4648a875ab3505050c6a0a3d7dd552422ea8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace995f69e007339fa2231fd5fe4648a875ab3505050c6a0a3d7dd552422ea8a->enter($__internal_ace995f69e007339fa2231fd5fe4648a875ab3505050c6a0a3d7dd552422ea8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_aba0e944705a19c079ffb4173caeb34f0b3728e70d92ebf64e2ba215e349aadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba0e944705a19c079ffb4173caeb34f0b3728e70d92ebf64e2ba215e349aadf->enter($__internal_aba0e944705a19c079ffb4173caeb34f0b3728e70d92ebf64e2ba215e349aadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_ace995f69e007339fa2231fd5fe4648a875ab3505050c6a0a3d7dd552422ea8a->leave($__internal_ace995f69e007339fa2231fd5fe4648a875ab3505050c6a0a3d7dd552422ea8a_prof);

        
        $__internal_aba0e944705a19c079ffb4173caeb34f0b3728e70d92ebf64e2ba215e349aadf->leave($__internal_aba0e944705a19c079ffb4173caeb34f0b3728e70d92ebf64e2ba215e349aadf_prof);

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
