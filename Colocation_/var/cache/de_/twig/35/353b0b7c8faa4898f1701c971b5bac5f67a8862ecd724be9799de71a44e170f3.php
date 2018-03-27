<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5b629f5b9f03b00a8bab8b24da5bc2ae9293a005a8070cbd7a68d69afcb95cd0 extends Twig_Template
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
        $__internal_3f0cf870b11d3e85da7185c696160ff72f102311a6736e14c095f4af50889929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0cf870b11d3e85da7185c696160ff72f102311a6736e14c095f4af50889929->enter($__internal_3f0cf870b11d3e85da7185c696160ff72f102311a6736e14c095f4af50889929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_30baa64b2a16983c8279fccf769422c95120f35ae902e148a60d068d0a27d1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30baa64b2a16983c8279fccf769422c95120f35ae902e148a60d068d0a27d1fa->enter($__internal_30baa64b2a16983c8279fccf769422c95120f35ae902e148a60d068d0a27d1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3f0cf870b11d3e85da7185c696160ff72f102311a6736e14c095f4af50889929->leave($__internal_3f0cf870b11d3e85da7185c696160ff72f102311a6736e14c095f4af50889929_prof);

        
        $__internal_30baa64b2a16983c8279fccf769422c95120f35ae902e148a60d068d0a27d1fa->leave($__internal_30baa64b2a16983c8279fccf769422c95120f35ae902e148a60d068d0a27d1fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
