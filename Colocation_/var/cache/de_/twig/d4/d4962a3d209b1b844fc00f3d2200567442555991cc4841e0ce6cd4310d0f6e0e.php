<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f838de18d24f0868068e1857c4d22ca97abb56f13fb9460d5effe0df4624abe9 extends Twig_Template
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
        $__internal_641556be1a5cb0d4fe50cfa32c57b900cefd34ecfbd6c071cbd2ef4145f77c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641556be1a5cb0d4fe50cfa32c57b900cefd34ecfbd6c071cbd2ef4145f77c50->enter($__internal_641556be1a5cb0d4fe50cfa32c57b900cefd34ecfbd6c071cbd2ef4145f77c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f7a2eb1b66f9af6884a9c1165c8d740ad6b12cd68e8da1241346878473ed9fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a2eb1b66f9af6884a9c1165c8d740ad6b12cd68e8da1241346878473ed9fd0->enter($__internal_f7a2eb1b66f9af6884a9c1165c8d740ad6b12cd68e8da1241346878473ed9fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_641556be1a5cb0d4fe50cfa32c57b900cefd34ecfbd6c071cbd2ef4145f77c50->leave($__internal_641556be1a5cb0d4fe50cfa32c57b900cefd34ecfbd6c071cbd2ef4145f77c50_prof);

        
        $__internal_f7a2eb1b66f9af6884a9c1165c8d740ad6b12cd68e8da1241346878473ed9fd0->leave($__internal_f7a2eb1b66f9af6884a9c1165c8d740ad6b12cd68e8da1241346878473ed9fd0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
