<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d3461fc2f32f3ce1c045b91b998ec8d0dd93e3f5e2b364aee603066e0002210c extends Twig_Template
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
        $__internal_900ebc26be9e6325e44d621cd51c24309978cf1ff4e8f5577984db2d72187f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900ebc26be9e6325e44d621cd51c24309978cf1ff4e8f5577984db2d72187f48->enter($__internal_900ebc26be9e6325e44d621cd51c24309978cf1ff4e8f5577984db2d72187f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6cb0719c2dff057cccf8e67af7121ae06fa07bbf5422d7b2c65c0f900c3ae48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb0719c2dff057cccf8e67af7121ae06fa07bbf5422d7b2c65c0f900c3ae48e->enter($__internal_6cb0719c2dff057cccf8e67af7121ae06fa07bbf5422d7b2c65c0f900c3ae48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_900ebc26be9e6325e44d621cd51c24309978cf1ff4e8f5577984db2d72187f48->leave($__internal_900ebc26be9e6325e44d621cd51c24309978cf1ff4e8f5577984db2d72187f48_prof);

        
        $__internal_6cb0719c2dff057cccf8e67af7121ae06fa07bbf5422d7b2c65c0f900c3ae48e->leave($__internal_6cb0719c2dff057cccf8e67af7121ae06fa07bbf5422d7b2c65c0f900c3ae48e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
