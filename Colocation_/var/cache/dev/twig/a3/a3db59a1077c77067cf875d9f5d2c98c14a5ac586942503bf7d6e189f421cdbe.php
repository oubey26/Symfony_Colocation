<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3052b1e964ae900c6ee875aa3cf1d55729d11be063976a3d0718c9a717229af2 extends Twig_Template
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
        $__internal_df8bf426fcf3f0e1dc905b474bfb0376dc9acad59abacd4d5a3a41cdee4178ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8bf426fcf3f0e1dc905b474bfb0376dc9acad59abacd4d5a3a41cdee4178ba->enter($__internal_df8bf426fcf3f0e1dc905b474bfb0376dc9acad59abacd4d5a3a41cdee4178ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_58fba0e9137209524dabb3147f9a0cd5d4a6589fa6ee86a126112bfaa8cbd54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fba0e9137209524dabb3147f9a0cd5d4a6589fa6ee86a126112bfaa8cbd54d->enter($__internal_58fba0e9137209524dabb3147f9a0cd5d4a6589fa6ee86a126112bfaa8cbd54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_df8bf426fcf3f0e1dc905b474bfb0376dc9acad59abacd4d5a3a41cdee4178ba->leave($__internal_df8bf426fcf3f0e1dc905b474bfb0376dc9acad59abacd4d5a3a41cdee4178ba_prof);

        
        $__internal_58fba0e9137209524dabb3147f9a0cd5d4a6589fa6ee86a126112bfaa8cbd54d->leave($__internal_58fba0e9137209524dabb3147f9a0cd5d4a6589fa6ee86a126112bfaa8cbd54d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
