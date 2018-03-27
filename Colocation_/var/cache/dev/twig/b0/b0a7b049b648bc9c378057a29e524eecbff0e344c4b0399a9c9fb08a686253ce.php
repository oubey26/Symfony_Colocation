<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_eb70e570ddcfd3833d9376fa388d17fe625cf5bf732ea16d4ae2950f45fde534 extends Twig_Template
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
        $__internal_970df31d0a675d4afe2073d6ce11a012dde8fe3ed640f29a75ba48c0ac919ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970df31d0a675d4afe2073d6ce11a012dde8fe3ed640f29a75ba48c0ac919ce1->enter($__internal_970df31d0a675d4afe2073d6ce11a012dde8fe3ed640f29a75ba48c0ac919ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_82c863353cb19ffb713f1868b08a920763d809db29acd430f60c92242a4eb952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c863353cb19ffb713f1868b08a920763d809db29acd430f60c92242a4eb952->enter($__internal_82c863353cb19ffb713f1868b08a920763d809db29acd430f60c92242a4eb952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_970df31d0a675d4afe2073d6ce11a012dde8fe3ed640f29a75ba48c0ac919ce1->leave($__internal_970df31d0a675d4afe2073d6ce11a012dde8fe3ed640f29a75ba48c0ac919ce1_prof);

        
        $__internal_82c863353cb19ffb713f1868b08a920763d809db29acd430f60c92242a4eb952->leave($__internal_82c863353cb19ffb713f1868b08a920763d809db29acd430f60c92242a4eb952_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
